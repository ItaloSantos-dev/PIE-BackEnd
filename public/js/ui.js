/* site-ui: transições, micro-interações de botões, carrossel, reveal, validação de contato
   - botões: espelhar animação do cadastrar para o login
   - carrossel: alturas uniformes, object-fit cover, dot ativo escuro
   - transição de página rápida e limpa (sem flash branco)
   - reveal ao rolar, toast, validação inline de contato
   - nomes neutros, sem identificadores pessoais
*/
(function () {
  'use strict';

  const $ = (s, ctx = document) => (ctx || document).querySelector(s);
  const $$ = (s, ctx = document) => Array.from((ctx || document).querySelectorAll(s));
  const safe = fn => { try { return fn(); } catch (e) { console.error('SiteUI:', e); } };

  /* ---------------- estilos injetados ---------------- */
  function injectStyles() {
    if (document.getElementById('siteui-main-style')) return;
    const css = `
/* overlay para transições: limpo e rápido */
#siteui-overlay{
  position:fixed;
  inset:0;
  background:rgba(10,10,10,0.05);
  backdrop-filter:blur(3px);
  -webkit-backdrop-filter:blur(3px);
  z-index:99999;
  pointer-events:none;
  opacity:0;
  transition:opacity .18s ease-in-out;
}
#siteui-overlay.show{
  opacity:1;
  pointer-events:auto;
}

/* toast discreto */
#siteui-toast-container{position:fixed;right:18px;bottom:86px;z-index:99998;display:flex;flex-direction:column;gap:10px}
.siteui-toast{min-width:200px;padding:10px 12px;border-radius:8px;background:rgba(12,17,23,0.92);color:#e6eef8;box-shadow:0 10px 24px rgba(2,6,23,0.12);opacity:0;transform:translateY(8px);transition:all .28s}
.siteui-toast.show{opacity:1;transform:none}
.siteui-toast.success{background:linear-gradient(90deg,#10b981,#059669);color:#fff}

/* reveal (aparecer ao rolar) */
.reveal{opacity:0;transform:translateY(12px);transition:all .58s cubic-bezier(.2,.9,.2,1)}
.reveal.visible{opacity:1;transform:none}

/* micro-interação do botão: encolher + clarear */
.siteui-btn-animated{transition:transform .12s ease, opacity .12s ease, filter .12s ease; will-change: transform, opacity}
.siteui-btn-animated.shrink{transform:scale(.96); opacity:.92; filter: brightness(1.04)}

/* classe de fallback shrink */
.shrink{transform:scale(.96); opacity:.92; filter:brightness(1.04); transition:transform .12s ease, opacity .12s ease;}

/* base do carrossel - imagens com altura igual + object-fit para visual uniforme */
#site-carousel{position:relative;overflow:hidden;border-radius:12px}
.siteui-carousel-track{display:flex;transition:transform .45s cubic-bezier(.22,.9,.22,1);will-change:transform}
.siteui-carousel-slide{min-width:100%;flex-shrink:0;display:block}
.siteui-carousel-slide img{width:100%;height:420px;display:block;object-fit:cover}

/* altura responsiva do carrossel */
@media (max-width:900px){
  .siteui-carousel-slide img{height:320px}
}
@media (max-width:600px){
  .siteui-carousel-slide img{height:220px}
}

/* controles do carrossel */
.siteui-carousel-controls{position:absolute;inset:0;pointer-events:none}
.siteui-carousel-arrow{position:absolute;top:50%;transform:translateY(-50%);pointer-events:auto;border:none;background:rgba(6,10,15,0.5);color:#fff;width:44px;height:44px;border-radius:8px;display:grid;place-items:center;cursor:pointer}
.siteui-carousel-arrow.left{left:10px}
.siteui-carousel-arrow.right{right:10px}
.siteui-carousel-dots{position:absolute;left:50%;transform:translateX(-50%);bottom:12px;display:flex;gap:8px;pointer-events:auto}
.siteui-carousel-dot{width:10px;height:10px;border-radius:50%;background:rgba(0,0,0,0.25);cursor:pointer;transition:all .18s}
.siteui-carousel-dot.active{background:rgba(0,0,0,0.9);box-shadow:0 6px 14px rgba(0,0,0,0.12)}

/* ícone de sucesso (tick) */
.siteui-check{position:fixed;right:18px;bottom:150px;z-index:99997;display:flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:12px;background:linear-gradient(90deg,#10b981,#059669);color:#fff;box-shadow:0 10px 30px rgba(5,150,105,0.12);transform:scale(0);transition:transform .28s ease}
.siteui-check.show{transform:scale(1)}

/* erro inline do input */
.siteui-input-error{outline:2px solid rgba(225,29,72,0.9);box-shadow:0 6px 20px rgba(225,29,72,0.06);}

/* pequenos ajustes de acessibilidade */
.siteui-carousel-arrow:focus, .siteui-carousel-dot:focus, .siteui-toast:focus {outline: none; box-shadow: 0 0 0 3px rgba(16,185,129,0.12);}
`;
    const el = document.createElement('style');
    el.id = 'siteui-main-style';
    el.textContent = css;
    document.head.appendChild(el);
  }

  /* ---------------- overlay (transições de página) ---------------- */
  function createOverlay() {
    let ov = document.getElementById('siteui-overlay');
    if (!ov) {
      ov = document.createElement('div');
      ov.id = 'siteui-overlay';
      document.body.appendChild(ov);
    }
    // pequena remoção no carregamento para garantir que não fique preso
    requestAnimationFrame(() => {
      setTimeout(() => ov.classList.remove('show'), 10);
    });
    return ov;
  }

  function enableLinkTransitions(overlay) {
    document.addEventListener('click', function (e) {
      const a = e.target.closest('a[href]');
      if (!a) return;
      const href = a.getAttribute('href');
      if (!href) return;
      // pular âncoras, mailto, tel, javascript, links externos, nova aba ou data-no-transition
      if (href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:') || href.startsWith('javascript:')) return;
      if (a.target === '_blank' || a.hasAttribute('download') || a.dataset.noTransition) return;
      try {
        const url = new URL(href, location.href);
        if (url.origin !== location.origin) return;
      } catch { return; }
      if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
      // link interno -> overlay rápido e depois navega
      e.preventDefault();
      overlay.classList.add('show');
      setTimeout(() => { location.href = href; }, 180);
    });
  }

  /* ---------------- toast e tick ---------------- */
  function showToast(text, type = 'info', time = 3000) {
    let container = document.getElementById('siteui-toast-container');
    if (!container) {
      container = document.createElement('div');
      container.id = 'siteui-toast-container';
      document.body.appendChild(container);
    }
    const t = document.createElement('div');
    t.className = 'siteui-toast ' + (type === 'success' ? 'success' : '');
    t.textContent = text;
    container.appendChild(t);
    requestAnimationFrame(() => t.classList.add('show'));
    setTimeout(() => { t.classList.remove('show'); setTimeout(()=>t.remove(), 300); }, time);
  }
  function showCheckOnce() {
    let el = document.getElementById('siteui-check');
    if (!el) {
      el = document.createElement('div');
      el.id = 'siteui-check';
      el.className = 'siteui-check';
      el.innerHTML = '<svg width="28" height="28" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17l-5-5" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      document.body.appendChild(el);
    }
    el.classList.add('show');
    setTimeout(()=> el.classList.remove('show'), 1000);
  }

  /* ---------------- micro-interação de botões (espelhar) ---------------- */
  function applyButtonAnimation() {
    // detectar botão de cadastro por seletores comuns ou por texto
    const registerKeywords = ['cadastrar','cadastro','registrar','registrar-se','cadastre','sign up','register'];
    const loginKeywords = ['login','entrar','acessar','log in','sign in'];

    let registerEl = null;
    // tentar ids explícitos primeiro
    ['#register-btn', '#RegistrarBtn', '#Registrar', 'button[type="submit"]'].some(sel => {
      const el = document.querySelector(sel);
      if (el) {
        const t = (el.textContent || el.value || '').trim().toLowerCase();
        if (t && registerKeywords.some(k => t.includes(k))) { registerEl = el; return true; }
      }
      return false;
    });

    // varredura alternativa se não encontrar
    if (!registerEl) {
      Array.from(document.querySelectorAll('button, a, input[type="submit"], p, span')).some(el => {
        const t = (el.textContent || el.value || '').trim().toLowerCase();
        if (!t) return false;
        if (registerKeywords.some(k => t.includes(k))) { registerEl = el; return true; }
        return false;
      });
    }

    // encontrar elemento de login
    let loginEl = null;
    ['#login-btn', '#btnLogin', 'a#btnLogin'].some(sel => {
      const el = document.querySelector(sel);
      if (el) { loginEl = el; return true; }
      return false;
    });

    if (!loginEl) {
      Array.from(document.querySelectorAll('a, button, input[type="button"], input[type="submit"], p')).some(el => {
        const t = (el.textContent || el.value || '').trim().toLowerCase();
        if (!t) return false;
        if (loginKeywords.some(k => t.includes(k))) { loginEl = el; return true; }
        return false;
      });
    }

    function makeAnimated(el) {
      if (!el) return;
      el.classList.add('siteui-btn-animated');
      el.addEventListener('mouseenter', () => el.classList.add('shrink'));
      el.addEventListener('mouseleave', () => el.classList.remove('shrink'));
      el.addEventListener('mousedown', () => el.classList.add('shrink'));
      el.addEventListener('mouseup', () => el.classList.remove('shrink'));
      el.addEventListener('keydown', (e) => { if (e.key === 'Enter' || e.key === ' ') el.classList.add('shrink'); });
      el.addEventListener('keyup', () => el.classList.remove('shrink'));
      el.addEventListener('focusout', () => el.classList.remove('shrink'));
    }

    if (registerEl) makeAnimated(registerEl);
    if (loginEl) makeAnimated(loginEl);

    // se achar o cadastrar mas não achar o login, tenta encontrar um candidato próximo
    if (registerEl && !loginEl) {
      const container = registerEl.closest('form, .areaCadastro, .areaLogin, .btosLines, .container') || document;
      const candidate = Array.from(container.querySelectorAll('a, button, p')).find(el => {
        const t = (el.textContent || el.value || '').trim().toLowerCase();
        return t && loginKeywords.some(k => t.includes(k));
      });
      if (candidate) makeAnimated(candidate);
    }
  }

  /* ---------------- carrossel simples ---------------- */
  function initCarousel() {
    const root = document.getElementById('site-carousel');
    if (!root) return;
    if (root.dataset.siteuiInit) return;
    root.dataset.siteuiInit = '1';

    const images = Array.from(root.querySelectorAll('img'));
    if (!images.length) return;

    const track = document.createElement('div');
    track.className = 'siteui-carousel-track';
    images.forEach(img => {
      const slide = document.createElement('div');
      slide.className = 'siteui-carousel-slide';
      const clone = img.cloneNode(true);
      clone.setAttribute('loading', 'lazy');
      slide.appendChild(clone);
      track.appendChild(slide);
      img.remove();
    });
    root.appendChild(track);

    const controls = document.createElement('div');
    controls.className = 'siteui-carousel-controls';
    controls.innerHTML = `
      <button class="siteui-carousel-arrow left" aria-label="Anterior">‹</button>
      <button class="siteui-carousel-arrow right" aria-label="Próximo">›</button>
      <div class="siteui-carousel-dots" aria-hidden="true"></div>
    `;
    root.appendChild(controls);

    const slides = Array.from(track.children);
    const total = slides.length;
    let index = 0;
    const dotsWrap = controls.querySelector('.siteui-carousel-dots');

    slides.forEach((s, i) => {
      const d = document.createElement('button');
      d.className = 'siteui-carousel-dot' + (i === 0 ? ' active' : '');
      d.setAttribute('data-index', i);
      d.addEventListener('click', () => goTo(i));
      dotsWrap.appendChild(d);
    });

    function update() {
      track.style.transform = `translateX(-${index * 100}%)`;
      Array.from(dotsWrap.children).forEach((d, i) => d.classList.toggle('active', i === index));
    }

    function goTo(i) {
      index = (i + total) % total;
      update();
      resetAutoplay();
    }

    controls.querySelector('.siteui-carousel-arrow.left').addEventListener('click', () => goTo(index - 1));
    controls.querySelector('.siteui-carousel-arrow.right').addEventListener('click', () => goTo(index + 1));

    let timer = null;
    function startAutoplay() { timer = setInterval(() => goTo(index + 1), 4200); }
    function resetAutoplay() { clearInterval(timer); startAutoplay(); }
    startAutoplay();

    // suporte a toque (swipe)
    let startX = 0, deltaX = 0, isTouch = false;
    root.addEventListener('touchstart', (e) => { isTouch = true; startX = e.touches[0].clientX; deltaX = 0; clearInterval(timer); }, {passive:true});
    root.addEventListener('touchmove', (e) => { if (!isTouch) return; deltaX = e.touches[0].clientX - startX; }, {passive:true});
    root.addEventListener('touchend', () => { if (!isTouch) return; if (Math.abs(deltaX) > 50) { if (deltaX < 0) goTo(index + 1); else goTo(index - 1); } resetAutoplay(); isTouch = false; });

    update();
    window.addEventListener('resize', update);
  }

  /* ---------------- validação do contato (inline) ---------------- */
  function setupContact() {
    const textarea = $('#mensagem');
    if (!textarea) return;
    const form = textarea.closest('form');
    if (!form) return;

    function setInlineError(el, msg) {
      if (!el) return;
      el.classList.add('siteui-input-error');
      const existing = el.parentNode.querySelector('.siteui-inline-msg');
      if (existing) existing.remove();
      if (msg) {
        const m = document.createElement('div');
        m.className = 'siteui-inline-msg';
        m.style.color = '#e11d48';
        m.style.fontSize = '13px';
        m.style.marginTop = '6px';
        m.textContent = msg;
        el.parentNode.appendChild(m);
      }
    }
    function clearInline(el) {
      if (!el) return;
      el.classList.remove('siteui-input-error');
      const existing = el.parentNode.querySelector('.siteui-inline-msg');
      if (existing) existing.remove();
    }

    form.addEventListener('input', (e) => { clearInline(e.target); });

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      safe(() => {
        const nomeEl = form.querySelector('#nome');
        const emailEl = form.querySelector('#email');
        const mensagemEl = form.querySelector('#mensagem');
        const nome = nomeEl?.value?.trim() || '';
        const email = emailEl?.value?.trim() || '';
        const mensagem = mensagemEl?.value?.trim() || '';

        [nomeEl, emailEl, mensagemEl].forEach(clearInline);

        if (!nome) { setInlineError(nomeEl, 'Por favor informe seu nome'); nomeEl?.focus(); return; }
        if (!email || !/^\S+@\S+\.\S+$/.test(email)) { setInlineError(emailEl, 'E-mail inválido'); emailEl?.focus(); return; }
        if (!mensagem || mensagem.length < 6) { setInlineError(mensagemEl, 'Escreva uma mensagem mais detalhada'); mensagemEl?.focus(); return; }

        const controls = form.querySelectorAll('input,textarea,button');
        controls.forEach(i => i.disabled = true);
        showToast('Enviando...', 'info', 1400);

        setTimeout(() => {
          controls.forEach(i => i.disabled = false);
          form.reset();
          showCheckOnce();
          showToast('Mensagem enviada', 'success');
        }, 900);
      });
    });
  }

  /* ---------------- reveal ao rolar ---------------- */
  function setupReveal() {
    const nodes = $$('.reveal, .destaque, .linha, .card, .produto, .painel');
    if (!nodes.length) return;
    const io = new IntersectionObserver((entries, ob) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          ob.unobserve(entry.target);
        }
      });
    }, {threshold: 0.12});
    nodes.forEach(n => io.observe(n));
  }

  /* ---------------- inicialização ---------------- */
  function init() {
    injectStyles();
    const overlay = createOverlay();
    enableLinkTransitions(overlay);
    applyButtonAnimation();
    initCarousel();
    setupContact();
    setupReveal();
    console.log('Site UI: carregado (botões espelhados, carrossel fixo, transições atualizadas)');
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init); else init();

})();

// Corrige o bug de transição ao voltar para uma página anterior
window.addEventListener('pageshow', function (event) {
  const overlay = document.getElementById('siteui-overlay');
  if (overlay) {
    // Garante que o overlay não fique visível ao retornar via botão "voltar"
    overlay.classList.remove('show');
  }
});