<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBS e atendimento - Guia do Cidad&atilde;o</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary: #0f766e;
            --primary-dark: #115e59;
            --blue: #2563eb;
            --red: #dc2626;
            --text: #1f2937;
            --muted: #64748b;
        }

        * { box-sizing: border-box; -webkit-tap-highlight-color: transparent; }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #dcfce7 0%, #eff6ff 45%, #f8fafc 100%);
            color: var(--text);
            padding-bottom: 86px;
        }

        .header {
            background: linear-gradient(135deg, #0f766e, #2563eb);
            color: white;
            padding: 22px 20px 72px;
            display: flex;
            align-items: center;
            gap: 15px;
            border-bottom-left-radius: 28px;
            border-bottom-right-radius: 28px;
        }

        .header a { color: white; text-decoration: none; font-size: 20px; }
        .header h1 { margin: 0; font-size: 24px; line-height: 1.1; }
        .header p { margin: 5px 0 0; opacity: .92; font-size: 14px; }

        .container { padding: 20px; margin-top: -58px; }

        .banner {
            background: white;
            border-radius: 22px;
            padding: 18px;
            display: grid;
            grid-template-columns: 1fr 88px;
            gap: 12px;
            align-items: center;
            box-shadow: 0 12px 25px rgba(15, 118, 110, .16);
            margin-bottom: 16px;
        }

        .banner h2 { margin: 0; color: var(--primary); font-size: 21px; }
        .banner p { margin: 8px 0 0; color: var(--muted); font-size: 14px; line-height: 1.4; }

        .banner-icon {
            width: 88px;
            height: 88px;
            border-radius: 22px;
            background: linear-gradient(135deg, #dbeafe, #dcfce7);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 38px;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 18px;
        }

        .action {
            background: white;
            color: var(--primary-dark);
            text-decoration: none;
            border-radius: 16px;
            padding: 13px;
            font-weight: 800;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 9px;
            box-shadow: 0 5px 13px rgba(15,23,42,.08);
        }

        .info-box {
            background: white;
            border-left: 5px solid var(--red);
            padding: 15px;
            border-radius: 16px;
            color: #7f1d1d;
            line-height: 1.45;
            font-size: 14px;
            margin-bottom: 16px;
            box-shadow: 0 5px 13px rgba(15,23,42,.06);
        }

        .section-title { margin: 20px 0 12px; font-size: 18px; }

        .card {
            background: white;
            border-radius: 18px;
            padding: 16px;
            margin-bottom: 14px;
            border-left: 5px solid var(--primary);
            box-shadow: 0 7px 18px rgba(15,23,42,.08);
        }

        .card h3 { margin: 0 0 6px; color: var(--primary-dark); font-size: 17px; }
        .card p { margin: 5px 0; font-size: 14px; color: var(--muted); line-height: 1.4; }

        .tags { display: flex; flex-wrap: wrap; gap: 7px; margin: 9px 0; }
        .tag {
            background: #dcfce7;
            color: #166534;
            padding: 5px 9px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 800;
        }

        .tag.blue { background: #dbeafe; color: #1d4ed8; }
        .tag.red { background: #fee2e2; color: #991b1b; }

        .buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 12px;
        }

        .btn {
            text-decoration: none;
            border-radius: 12px;
            padding: 9px 11px;
            font-size: 13px;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .btn-map { background: #dbeafe; color: #1d4ed8; }

        .bottom-nav {
            background: white;
            border-top: 1px solid #e5e7eb;
            bottom: 0;
            display: flex;
            justify-content: space-around;
            left: 0;
            padding: 11px 0;
            position: fixed;
            width: 100%;
            z-index: 10;
        }

        .nav-item {
            align-items: center;
            color: var(--muted);
            display: flex;
            flex-direction: column;
            font-size: 11px;
            gap: 4px;
            text-decoration: none;
        }

        .nav-item.active { color: var(--primary); font-weight: 800; }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('principal', [], false) }}"><i class="fas fa-arrow-left"></i></a>
        <div>
            <h1>UBS e atendimento</h1>
            <p>Locais de sa&uacute;de em Parauapebas</p>
        </div>
    </div>

    <main class="container">
        <section class="banner">
            <div>
                <h2>Procure acompanhamento na UBS</h2>
                <p>A pessoa com diabetes precisa acompanhar glicemia, alimenta&ccedil;&atilde;o, medicamentos e cuidados com os p&eacute;s.</p>
            </div>
            <div class="banner-icon"><i class="fas fa-hospital-user"></i></div>
        </section>

        <div class="quick-actions">
            <a class="action" href="https://www.google.com/maps/search/UBS+Parauapebas+PA" target="_blank">
                <i class="fas fa-map-location-dot"></i> Mapa das UBS
            </a>
            <a class="action" href="{{ route('sinais_alerta', [], false) }}">
                <i class="fas fa-triangle-exclamation"></i> Sinais de alerta
            </a>
        </div>

        <div class="info-box">
            <strong>Aten&ccedil;&atilde;o:</strong> este guia ajuda com informa&ccedil;&otilde;es e localiza&ccedil;&atilde;o, mas n&atilde;o substitui consulta m&eacute;dica. Em caso de desmaio, confus&atilde;o mental, falta de ar, feridas graves ou mal-estar intenso, procure atendimento imediatamente.
        </div>

        <h2 class="section-title">UBS e locais de atendimento</h2>

        <section class="card">
            <h3>Hospital Municipal de Parauapebas</h3>
            <div class="tags"><span class="tag red">Urg&ecirc;ncia e hospital</span><span class="tag blue">Primavera</span></div>
            <p>R. A, 1262 - Primavera, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/Hospital+Municipal+de+Parauapebas+R.+A+1262+Primavera"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>

        <section class="card">
            <h3>UBS Tropical I</h3>
            <div class="tags"><span class="tag">Acompanhamento b&aacute;sico</span><span class="tag blue">Tropical</span></div>
            <p>Av. Jatob&aacute;, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/UBS+Tropical+I+Av.+Jatob&aacute;+Parauapebas+PA"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>

        <section class="card">
            <h3>UBS Novo Brasil</h3>
            <div class="tags"><span class="tag">Consulta e orienta&ccedil;&atilde;o</span><span class="tag blue">Amaz&ocirc;nia</span></div>
            <p>Av. Salvador Flauzino, 31 - Qd 37 - Amaz&ocirc;nia, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/UBS+Novo+Brasil+Av.+Salvador+Flauzino+31+Amaz&ocirc;nia+Parauapebas+PA"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>

        <section class="card">
            <h3>UBS Altamira</h3>
            <div class="tags"><span class="tag">Atendimento pr&oacute;ximo</span><span class="tag blue">Altamira</span></div>
            <p>R. Pedro &Aacute;lvares Cabral, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/UBS+Altamira+Rua+Pedro+&Aacute;lvares+Cabral+Parauapebas+PA"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>

        <section class="card">
            <h3>UBS Jardim Canad&aacute;</h3>
            <div class="tags"><span class="tag">Unidade b&aacute;sica</span><span class="tag blue">Jardim Canad&aacute;</span></div>
            <p>Rua 77, QD Especial - Jardim Canad&aacute;, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/UBS+Jardim+Canada+Rua+77+Parauapebas+PA"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>

        <section class="card">
            <h3>Policl&iacute;nica Municipal de Parauapebas</h3>
            <div class="tags"><span class="tag">Especialidades</span><span class="tag blue">Centro</span></div>
            <p>Av. A, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/Policl&iacute;nica+Municipal+de+Parauapebas+Av.+A"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>

        <section class="card">
            <h3>UBS Guanabara</h3>
            <div class="tags"><span class="tag">Acompanhamento b&aacute;sico</span><span class="tag blue">Guanabara</span></div>
            <p>R. Manoel Garrincha, 438 - Guanabara, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/UBS+Guanabara+Rua+Manoel+Garrincha+438+Parauapebas+PA"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>

        <section class="card">
            <h3>UBS Bairro da Paz</h3>
            <div class="tags"><span class="tag">Unidade b&aacute;sica</span><span class="tag blue">Da Paz</span></div>
            <p>R. Santa Maria, 182 - Da Paz, Parauapebas - PA</p>
            <div class="buttons">
                <a class="btn btn-map" target="_blank" href="https://www.google.com/maps/search/UBS+Bairro+da+Paz+Rua+Santa+Maria+182+Parauapebas+PA"><i class="fas fa-location-dot"></i> Ver no mapa</a>
            </div>
        </section>
    </main>

    <nav class="bottom-nav">
        <a href="{{ route('principal', [], false) }}" class="nav-item"><i class="fas fa-home"></i><span>In&iacute;cio</span></a>
        <a href="{{ route('meu_controle', [], false) }}" class="nav-item"><i class="fas fa-clipboard-check"></i><span>Controle</span></a>
        <a href="{{ route('detalhes_saude', [], false) }}" class="nav-item active"><i class="fas fa-map-pin"></i><span>UBS</span></a>
    </nav>
    <script>
        if ("scrollRestoration" in history) {
            history.scrollRestoration = "manual";
        }

        function forceTop() {
            document.documentElement.scrollTop = 0;
            document.body.scrollTop = 0;
            window.scrollTo({ top: 0, left: 0, behavior: "instant" });
        }

        forceTop();
        window.addEventListener("DOMContentLoaded", forceTop);
        window.addEventListener("load", () => {
            forceTop();
            setTimeout(forceTop, 100);
            setTimeout(forceTop, 400);
        });
        window.addEventListener("pageshow", () => {
            forceTop();
            setTimeout(forceTop, 100);
            setTimeout(forceTop, 400);
        });
    </script>
</body>
</html>
