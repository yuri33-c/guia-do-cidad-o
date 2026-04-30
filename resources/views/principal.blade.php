<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia do Cidad&atilde;o - Parauapebas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary: #0f766e;
            --primary-dark: #115e59;
            --blue: #2563eb;
            --green: #16a34a;
            --red: #dc2626;
            --yellow: #ca8a04;
            --card-bg: #ffffff;
            --text-main: #163235;
            --text-muted: #64748b;
        }

        * { box-sizing: border-box; -webkit-tap-highlight-color: transparent; }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: linear-gradient(180deg, #dcfce7 0%, #eff6ff 45%, #f8fafc 100%);
            color: var(--text-main);
            padding-bottom: 88px;
        }

        .app-header {
            background: linear-gradient(135deg, #0f766e, #2563eb);
            color: white;
            padding: 32px 20px 88px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            position: relative;
            overflow: hidden;
        }

        .app-header::after {
            content: "";
            position: absolute;
            right: -40px;
            top: 20px;
            width: 170px;
            height: 170px;
            background: rgba(255,255,255,0.13);
            border-radius: 50%;
        }

        .app-header p { margin: 0 0 8px; opacity: 0.95; }
        .app-header h1 { margin: 0; font-size: 30px; font-weight: 900; line-height: 1.1; }
        .app-header .subtitle { max-width: 310px; margin-top: 10px; font-size: 15px; }

        .container { padding: 20px; margin-top: -78px; position: relative; z-index: 2; }

        .hero-card {
            background: white;
            border-radius: 24px;
            padding: 18px;
            box-shadow: 0 18px 35px rgba(15, 118, 110, 0.22);
            display: grid;
            grid-template-columns: 1fr 92px;
            gap: 12px;
            align-items: center;
            margin-bottom: 18px;
        }

        .hero-card h2 { margin: 0; font-size: 20px; color: var(--primary); }
        .hero-card p { margin: 8px 0 0; color: var(--text-muted); font-size: 14px; line-height: 1.4; }

        .hero-img {
            width: 92px;
            height: 92px;
            border-radius: 22px;
            background: linear-gradient(135deg, #dbeafe, #dcfce7);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 42px;
        }

        .menu-grid { display: grid; gap: 15px; }

        .menu-card {
            background: var(--card-bg);
            padding: 18px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 8px 18px rgba(15, 23, 42, 0.10);
            border: 1px solid rgba(15, 118, 110, 0.08);
        }

        .menu-card:active { transform: scale(0.98); }

        .card-icon {
            min-width: 50px;
            width: 50px;
            height: 50px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 21px;
        }

        .bg-red { background: #fee2e2; color: var(--red); }
        .bg-blue { background: #dbeafe; color: var(--blue); }
        .bg-green { background: #dcfce7; color: var(--green); }
        .bg-yellow { background: #fef9c3; color: var(--yellow); }
        .bg-teal { background: #ccfbf1; color: var(--primary); }

        .card-info h3 { margin: 0; font-size: 17px; }
        .card-info p { margin: 5px 0 0; color: var(--text-muted); font-size: 13px; line-height: 1.35; }

        .section-title {
            margin: 22px 0 12px;
            font-size: 18px;
            color: #0f172a;
        }

        .checklist {
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 18px rgba(15, 23, 42, 0.08);
            padding: 14px;
            margin-bottom: 18px;
        }

        .check-item {
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
            color: var(--text-main);
            display: flex;
            gap: 10px;
            padding: 12px 2px;
        }

        .check-item:last-child { border-bottom: none; }
        .check-item input { width: 20px; height: 20px; accent-color: var(--primary); }
        .check-item span { color: var(--text-muted); font-size: 13px; }

        .checklist-actions {
            display: grid;
            gap: 8px;
            margin-top: 12px;
        }

        .save-checklist {
            background: var(--primary);
            border: none;
            border-radius: 16px;
            color: white;
            cursor: pointer;
            font: inherit;
            font-weight: 850;
            padding: 14px;
            width: 100%;
        }

        .undo-checklist {
            background: #e5e7eb;
            border: none;
            border-radius: 16px;
            color: #334155;
            cursor: pointer;
            font: inherit;
            font-weight: 850;
            padding: 14px;
            width: 100%;
        }

        .checklist-status {
            color: var(--text-muted);
            font-size: 12px;
            min-height: 16px;
            text-align: center;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .tip-card {
            background: white;
            border-radius: 18px;
            padding: 14px;
            box-shadow: 0 6px 14px rgba(15, 23, 42, 0.08);
        }

        .tip-card strong { display: flex; align-items: center; gap: 6px; margin-bottom: 6px; color: var(--primary); }
        .tip-card span { color: var(--text-muted); font-size: 12px; line-height: 1.35; }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            display: flex;
            justify-content: space-around;
            padding: 11px 0;
            border-top: 1px solid #e5e7eb;
            z-index: 10;
        }

        .nav-item {
            border: none;
            background: none;
            color: var(--text-muted);
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 11px;
            gap: 4px;
            text-decoration: none;
        }

        .nav-item.active { color: var(--primary); font-weight: 700; }
    </style>
</head>
<body>
    <header class="app-header">
        <p><i class="fas fa-location-dot"></i> Parauapebas, PA</p>
        <h1>GUIA DO CIDAD&Atilde;O</h1>
        <p class="subtitle">Guia simples para ajudar pessoas com diabetes a encontrar atendimento, informa&ccedil;&atilde;o e cuidado.</p>
    </header>

    <main class="container">
        <section class="hero-card">
            <div>
                <h2>Cuidado com hipertensão e diabetes perto de voc&ecirc;</h2>
                <p>Veja UBS, hospitais, orienta&ccedil;&otilde;es, v&iacute;deos, controle di&aacute;rio e sinais de alerta em um s&oacute; lugar.</p>
            </div>
            <div class="hero-img"><i class="fas fa-stethoscope"></i></div>
        </section>

        <div class="menu-grid">
            <a href="{{ route('detalhes_saude', [], false) }}" class="menu-card">
                <div class="card-icon bg-red"><i class="fas fa-map-marker-alt"></i></div>
                <div class="card-info">
                    <h3>UBS e atendimento</h3>
                    <p>Unidades de sa&uacute;de com bot&atilde;o de liga&ccedil;&atilde;o, bairro, tipo de atendimento e mapa.</p>
                </div>
            </a>

            <a href="{{ route('meu_controle', [], false) }}" class="menu-card">
                <div class="card-icon bg-teal"><i class="fas fa-clipboard-check"></i></div>
                <div class="card-info">
                    <h3>Meu controle</h3>
                    <p>Anote glicemia, press&atilde;o, rem&eacute;dios, sintomas e pr&oacute;xima consulta.</p>
                </div>
            </a>

            <a href="https://www.youtube.com/results?search_query=cuidados+com+diabetes+tipo+2" target="_blank" class="menu-card">
                <div class="card-icon bg-blue"><i class="fas fa-play-circle"></i></div>
                <div class="card-info">
                    <h3>V&iacute;deos educativos</h3>
                    <p>Conte&uacute;dos sobre alimenta&ccedil;&atilde;o, glicemia, insulina, atividade f&iacute;sica e cuidados di&aacute;rios.</p>
                </div>
            </a>

            <a href="{{ route('alimentacao_glicemia', [], false) }}" class="menu-card">
                <div class="card-icon bg-green"><i class="fas fa-apple-whole"></i></div>
                <div class="card-info">
                    <h3>Alimenta&ccedil;&atilde;o segura</h3>
                    <p>Prefira refei&ccedil;&otilde;es equilibradas, evite excesso de a&ccedil;&uacute;car e siga orienta&ccedil;&atilde;o profissional.</p>
                </div>
            </a>

            <a href="{{ route('sinais_alerta', [], false) }}" class="menu-card">
                <div class="card-icon bg-yellow"><i class="fas fa-triangle-exclamation"></i></div>
                <div class="card-info">
                    <h3>Sinais de alerta</h3>
                    <p>Tontura, suor frio, vis&atilde;o emba&ccedil;ada, muita sede ou feridas que n&atilde;o cicatrizam exigem aten&ccedil;&atilde;o.</p>
                </div>
            </a>
        </div>

        <h2 class="section-title">Checklist de hoje</h2>
        <section class="checklist">
            <label class="check-item"><input type="checkbox" data-check="agua"><div>Bebi &aacute;gua<br><span>Evitei refrigerante e bebida muito doce.</span></div></label>
            <label class="check-item"><input type="checkbox" data-check="remedio"><div>Tomei meus rem&eacute;dios<br><span>Segui o hor&aacute;rio orientado pela equipe de sa&uacute;de.</span></div></label>
            <label class="check-item"><input type="checkbox" data-check="glicemia"><div>Medi ou observei a glicemia<br><span>Anotei o valor, se usei aparelho.</span></div></label>
            <label class="check-item"><input type="checkbox" data-check="pes"><div>Olhei meus p&eacute;s<br><span>Observei cortes, bolhas, rachaduras ou vermelhid&atilde;o.</span></div></label>
            <label class="check-item"><input type="checkbox" data-check="alimentacao"><div>Fiz refei&ccedil;&otilde;es equilibradas<br><span>Inclu&iacute; verduras, prote&iacute;na e controlei carboidratos.</span></div></label>
            <div class="checklist-actions">
                <button type="button" class="save-checklist" id="save-checklist">Salvar checklist</button>
                <button type="button" class="undo-checklist" id="undo-checklist">Desfazer salvação</button>
                <div class="checklist-status" id="checklist-status"></div>
            </div>
        </section>

        <h2 class="section-title">Cuidados importantes</h2>
        <div class="tips-grid">
            <div class="tip-card"><strong><i class="fas fa-droplet"></i> Hidrata&ccedil;&atilde;o</strong><span>Beba &aacute;gua e evite refrigerantes e bebidas muito doces.</span></div>
            <div class="tip-card"><strong><i class="fas fa-shoe-prints"></i> P&eacute;s</strong><span>Observe cortes, bolhas, rachaduras e procure atendimento se n&atilde;o melhorar.</span></div>
            <div class="tip-card"><strong><i class="fas fa-bowl-food"></i> Prato</strong><span>Inclua verduras, prote&iacute;nas e controle por&ccedil;&otilde;es de arroz, massas e doces.</span></div>
            <div class="tip-card"><strong><i class="fas fa-vial"></i> Glicemia</strong><span>Fa&ccedil;a acompanhamento na UBS e siga a orienta&ccedil;&atilde;o do profissional de sa&uacute;de.</span></div>
            <div class="tip-card"><strong><i class="fas fa-pills"></i> Rem&eacute;dios</strong><span>Tome nos hor&aacute;rios combinados e n&atilde;o pare insulina ou comprimidos por conta pr&oacute;pria.</span></div>
            <div class="tip-card"><strong><i class="fas fa-person-walking"></i> Movimento</strong><span>Caminhadas leves ajudam no controle da glicemia, quando liberadas pela equipe de sa&uacute;de.</span></div>
            <div class="tip-card"><strong><i class="fas fa-user-doctor"></i> Consultas</strong><span>Leve exames, receitas e anota&ccedil;&otilde;es da glicemia para facilitar o atendimento.</span></div>
            <div class="tip-card"><strong><i class="fas fa-bed"></i> Sono</strong><span>Dormir bem ajuda no controle do apetite, do estresse e da glicose no sangue.</span></div>
            <div class="tip-card"><strong><i class="fas fa-heart-pulse"></i> Press&atilde;o</strong><span>Acompanhe a press&atilde;o arterial, pois diabetes e press&atilde;o alta precisam de cuidado junto.</span></div>
            <div class="tip-card"><strong><i class="fas fa-eye"></i> Olhos</strong><span>Vis&atilde;o emba&ccedil;ada ou piora para enxergar precisa ser avisada na consulta.</span></div>
            <div class="tip-card"><strong><i class="fas fa-tooth"></i> Boca</strong><span>Cuide dos dentes e gengivas; inflama&ccedil;&otilde;es podem dificultar o controle da glicemia.</span></div>
            <div class="tip-card"><strong><i class="fas fa-triangle-exclamation"></i> Alerta</strong><span>Desmaio, confus&atilde;o, ferida grave ou mal-estar intenso precisam de atendimento r&aacute;pido.</span></div>
        </div>
    </main>

    <nav class="bottom-nav">
        <a href="{{ route('principal', [], false) }}" class="nav-item active"><i class="fas fa-home"></i><span>In&iacute;cio</span></a>
        <a href="{{ route('meu_controle', [], false) }}" class="nav-item"><i class="fas fa-clipboard-check"></i><span>Controle</span></a>
        <a href="{{ route('detalhes_saude', [], false) }}" class="nav-item"><i class="fas fa-map-pin"></i><span>UBS</span></a>
        <a href="https://www.youtube.com/results?search_query=diabetes+cuidados" target="_blank" class="nav-item"><i class="fas fa-video"></i><span>V&iacute;deos</span></a>
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

        const todayKey = new Date().toISOString().slice(0, 10);
        const storageKey = `checklist-diabetes-${todayKey}`;
        const saved = JSON.parse(localStorage.getItem(storageKey) || "{}");
        const status = document.getElementById("checklist-status");

        document.querySelectorAll("[data-check]").forEach((item) => {
            item.checked = Boolean(saved[item.dataset.check]);
        });

        document.getElementById("save-checklist").addEventListener("click", () => {
            document.querySelectorAll("[data-check]").forEach((item) => {
                saved[item.dataset.check] = item.checked;
            });
            localStorage.setItem(storageKey, JSON.stringify(saved));
            status.textContent = "Checklist salvo neste celular.";
            setTimeout(() => {
                status.textContent = "";
            }, 2500);
        });

        document.getElementById("undo-checklist").addEventListener("click", () => {
            localStorage.removeItem(storageKey);
            Object.keys(saved).forEach((key) => {
                delete saved[key];
            });
            document.querySelectorAll("[data-check]").forEach((item) => {
                item.checked = false;
            });
            status.textContent = "Salvação desfeita. Checklist limpo.";
            setTimeout(() => {
                status.textContent = "";
            }, 2500);
        });
    </script>
</body>
</html>