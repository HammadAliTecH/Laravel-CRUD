<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>404 — Page Not Found</title>
  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --muted:#98a0b3;
      --accent:#60a5fa;
      --glass: rgba(255,255,255,0.03);
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial;
      background: linear-gradient(180deg,var(--bg) 0%, #071028 100%);
      color:#e6eef8;
      -webkit-font-smoothing:antialiased;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:24px;
    }
    .card{
      width:100%;
      max-width:920px;
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius:14px;
      padding:36px;
      display:grid;
      grid-template-columns: 1fr 360px;
      gap:28px;
      box-shadow: 0 8px 30px rgba(2,6,23,0.7);
      border: 1px solid rgba(255,255,255,0.03);
      align-items:center;
    }
    .art{
      display:flex;
      gap:18px;
      align-items:center;
    }
    .badge{
      background:linear-gradient(90deg,var(--accent), #7dd3fc 120%);
      padding:6px 10px;
      border-radius:999px;
      color:#012034;
      font-weight:700;
      font-size:13px;
    }
    h1{
      margin:6px 0 6px 0;
      font-size:44px;
      letter-spacing:-1px;
      line-height:1;
    }
    p.lead{color:var(--muted); margin:0 0 16px 0}
    .actions{display:flex;gap:12px;align-items:center}
    .btn{
      background:var(--accent);
      color:#02203a;
      padding:10px 14px;
      border-radius:10px;
      font-weight:700;
      border:none;
      cursor:pointer;
      box-shadow: 0 6px 18px rgba(96,165,250,0.12);
    }
    .btn.ghost{
      background:transparent;
      border:1px solid rgba(255,255,255,0.06);
      color:var(--muted);
      font-weight:600;
    }
    .search{
      display:flex;
      gap:8px;
      margin-top:14px;
    }
    .search input{
      flex:1;
      min-width:0;
      padding:10px 12px;
      border-radius:10px;
      border:1px solid rgba(255,255,255,0.04);
      background:var(--glass);
      color:inherit;
      outline:none;
    }
    .meta{color:var(--muted); font-size:13px; margin-top:12px}

    /* illustration column */
    .illus{
      display:flex;
      align-items:center;
      justify-content:center;
      padding:18px;
      border-radius:12px;
      background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(0,0,0,0.04));
      border:1px solid rgba(255,255,255,0.02);
      min-height:220px;
    }
    svg{max-width:100%; height:auto}

    /* small screens */
    @media (max-width:820px){
      .card{grid-template-columns:1fr; padding:24px}
      h1{font-size:36px}
      .illus{order:-1}
    }

    /* subtle floating animation */
    .float{animation: float 6s ease-in-out infinite}
    @keyframes float{
      0%{transform:translateY(0)}
      50%{transform:translateY(-8px)}
      100%{transform:translateY(0)}
    }
  </style>
</head>
<body>
  <main class="card" role="main" aria-labelledby="title">
    <section>
      <div class="art">
        <span class="badge">Error • 404</span>
        <div style="flex:1">
          <h1 id="title">Page not found</h1>
          <p class="lead">We can't find the page you're looking for. It may have been moved, deleted, or typed incorrectly.</p>
          <div class="actions">
            <button class="btn" onclick="location.href='/'">Go to home</button>
            <button class="btn ghost" onclick="history.back()">Go back</button>
          </div>

          <div class="search" role="search" aria-label="Site search">
            <input type="search" placeholder="Search the site or paste a URL" aria-label="Search site" onkeydown="if(event.key==='Enter') doSearch(this.value)">
            <button class="btn" onclick="doSearch(this.previousElementSibling.value)">Search</button>
          </div>

          <div class="meta">Tip: try checking for typos, or use the search above.</div>
        </div>
      </div>
    </section>

    <aside class="illus">
      <!-- Friendly, simple SVG illustration -->
      <svg class="float" width="320" height="220" viewBox="0 0 320 220" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <rect x="6" y="56" width="220" height="140" rx="12" fill="rgba(255,255,255,0.03)"/>
        <path d="M244 88c0-20 16-36 36-36s36 16 36 36v56c0 20-16 36-36 36s-36-16-36-36V88z" fill="rgba(96,165,250,0.12)"/>
        <g transform="translate(20,20)">
          <circle cx="80" cy="70" r="38" fill="rgba(96,165,250,0.18)" />
          <path d="M60 60c10-12 40-12 52 0" stroke="rgba(255,255,255,0.7)" stroke-width="3" stroke-linecap="round" />
          <rect x="6" y="120" width="160" height="8" rx="4" fill="rgba(255,255,255,0.06)" />
          <rect x="6" y="138" width="120" height="8" rx="4" fill="rgba(255,255,255,0.04)" />
        </g>
        <g transform="translate(200,20)">
          <rect x="8" y="28" width="72" height="12" rx="6" fill="rgba(255,255,255,0.04)"/>
          <rect x="8" y="56" width="48" height="8" rx="4" fill="rgba(255,255,255,0.03)"/>
          <circle cx="60" cy="120" r="20" fill="rgba(125,211,252,0.12)"/>
        </g>
      </svg>
    </aside>
  </main>

  <script>
    function doSearch(q){
      q = (q||'').trim();
      if(!q) return alert('Please enter a search term.');
      // simple smart redirect: if it looks like a relative path, try sending user there
      try{
        if(q.startsWith('/') || q.includes('.html') || q.includes('.php')){
          location.href = q;
        } else {
          // fallback: use site search (here we use Google with site: as a simple default)
          var site = location.hostname;
          location.href = 'https://www.google.com/search?q=' + encodeURIComponent('site:'+site+' '+q);
        }
      }catch(e){
        console.error(e);
        location.href = '/';
      }
    }
  </script>
</body>
</html>