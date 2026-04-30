<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu controle - Guia do Cidad&atilde;o</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary: #0f766e;
            --primary-dark: #115e59;
            --blue: #2563eb;
            --red: #dc2626;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #64748b;
        }

        * { box-sizing: border-box; -webkit-tap-highlight-color: transparent; }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: linear-gradient(180deg, #dcfce7 0%, #eff6ff 45%, #f8fafc 100%);
            color: var(--text);
            padding-bottom: 86px;
        }

        .page-header {
            background: linear-gradient(135deg, #0f766e, #2563eb);
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            color: white;
            padding: 20px 20px 34px;
        }

        .back-btn {
            color: white;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 800;
            margin-bottom: 22px;
            text-decoration: none;
        }

        .page-header h1 { font-size: 28px; line-height: 1.1; margin: 0 0 10px; }
        .page-header p { line-height: 1.45; margin: 0; max-width: 560px; opacity: .96; }

        main { padding: 18px; }

        .card {
            background: var(--card);
            border-radius: 20px;
            box-shadow: 0 8px 18px rgba(15, 23, 42, .08);
            margin-bottom: 14px;
            padding: 18px;
        }

        .card h2 {
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            margin: 0 0 12px;
        }

        .form-grid {
            display: grid;
            gap: 12px;
        }

        label {
            color: var(--muted);
            display: grid;
            font-size: 13px;
            font-weight: 800;
            gap: 6px;
            min-width: 0;
        }

        input,
        textarea {
            appearance: none;
            -webkit-appearance: none;
            background: white;
            border: 1px solid #d1d5db;
            border-radius: 14px;
            color: var(--text);
            font: inherit;
            max-width: 100%;
            padding: 12px;
            width: 100%;
        }

        input[type="date"] {
            background: white;
            display: block;
            height: 46px;
            line-height: 20px;
            min-height: 46px;
            overflow: hidden;
            text-align: left;
            text-align-last: left;
        }

        input[type="date"]::-webkit-date-and-time-value {
            text-align: left;
        }

        textarea { min-height: 86px; resize: vertical; }

        .button-row {
            display: grid;
            gap: 10px;
            grid-template-columns: 1fr 1fr;
            margin-top: 14px;
        }

        button,
        .link-btn {
            border: 0;
            border-radius: 16px;
            color: white;
            cursor: pointer;
            font: inherit;
            font-weight: 850;
            padding: 14px;
            text-align: center;
            text-decoration: none;
        }

        .save { background: var(--primary); }
        .clear { background: var(--red); }

        .summary {
            display: grid;
            gap: 10px;
        }

        .summary-item {
            background: #f8fafc;
            border-radius: 16px;
            padding: 13px;
        }

        .summary-item strong {
            color: var(--primary-dark);
            display: block;
            margin-bottom: 4px;
        }

        .summary-item span {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.4;
        }

        .notice {
            border-left: 5px solid var(--blue);
            color: var(--muted);
            line-height: 1.45;
        }

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

        @media (min-width: 720px) {
            main { margin: 0 auto; max-width: 920px; }
            .form-grid { grid-template-columns: repeat(2, 1fr); }
            label.full { grid-column: 1 / -1; }
            .summary { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <a href="{{ route('principal', [], false) }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
        <h1>Meu controle</h1>
        <p>Anote informa&ccedil;&otilde;es importantes do dia. Os dados ficam salvos neste navegador para voc&ecirc; consultar depois.</p>
    </header>

    <main>
        <section class="card notice">
            Este espa&ccedil;o ajuda na organiza&ccedil;&atilde;o, mas n&atilde;o substitui acompanhamento na UBS. Leve suas anota&ccedil;&otilde;es para consultas.
        </section>

        <section class="card">
            <h2><i class="fas fa-pen-to-square"></i> Registro de hoje</h2>
            <form id="control-form">
                <div class="form-grid">
                    <label>Data
                        <input type="date" name="data">
                    </label>
                    <label>Glicemia
                        <input type="text" name="glicemia" placeholder="Ex: 120 mg/dL">
                    </label>
                    <label>Press&atilde;o
                        <input type="text" name="pressao" placeholder="Ex: 12x8">
                    </label>
                    <label>Rem&eacute;dios tomados
                        <input type="text" name="remedios" placeholder="Ex: Metformina, insulina">
                    </label>
                    <label>Pr&oacute;xima consulta
                        <input type="date" name="consulta">
                    </label>
                    <label>Sintomas
                        <input type="text" name="sintomas" placeholder="Ex: tontura, sede, nenhum">
                    </label>
                    <label class="full">Observa&ccedil;&otilde;es
                        <textarea name="observacoes" placeholder="Escreva algo importante para lembrar na consulta"></textarea>
                    </label>
                </div>
                <div class="button-row">
                    <button type="submit" class="save">Salvar</button>
                    <button type="button" class="clear" id="clear-control">Limpar</button>
                </div>
            </form>
        </section>

        <section class="card">
            <h2><i class="fas fa-clipboard-list"></i> &Uacute;ltimo registro salvo</h2>
            <div class="summary" id="summary"></div>
        </section>
    </main>

    <nav class="bottom-nav">
        <a href="{{ route('principal', [], false) }}" class="nav-item"><i class="fas fa-home"></i><span>In&iacute;cio</span></a>
        <a href="{{ route('meu_controle', [], false) }}" class="nav-item active"><i class="fas fa-clipboard-check"></i><span>Controle</span></a>
        <a href="{{ route('detalhes_saude', [], false) }}" class="nav-item"><i class="fas fa-map-pin"></i><span>UBS</span></a>
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

        const form = document.getElementById("control-form");
        const summary = document.getElementById("summary");
        const storageKey = "meu-controle-diabetes";
        const labels = {
            data: "Data",
            glicemia: "Glicemia",
            pressao: "Press&atilde;o",
            remedios: "Rem&eacute;dios",
            consulta: "Pr&oacute;xima consulta",
            sintomas: "Sintomas",
            observacoes: "Observa&ccedil;&otilde;es"
        };

        function today() {
            return new Date().toISOString().slice(0, 10);
        }

        function readSaved() {
            return JSON.parse(localStorage.getItem(storageKey) || "{}");
        }

        function fillForm(data) {
            Object.keys(labels).forEach((key) => {
                if (form.elements[key]) {
                    form.elements[key].value = data[key] || "";
                }
            });

            if (!form.elements.data.value) {
                form.elements.data.value = today();
            }
        }

        function renderSummary(data) {
            const hasData = Object.values(data).some(Boolean);
            if (!hasData) {
                summary.innerHTML = '<div class="summary-item"><strong>Nenhum registro ainda</strong><span>Preencha o formul&aacute;rio e toque em salvar.</span></div>';
                return;
            }

            summary.innerHTML = Object.keys(labels).map((key) => {
                const value = data[key] || "N&atilde;o informado";
                return `<div class="summary-item"><strong>${labels[key]}</strong><span>${value}</span></div>`;
            }).join("");
        }

        fillForm(readSaved());
        renderSummary(readSaved());

        form.addEventListener("submit", (event) => {
            event.preventDefault();
            const data = Object.fromEntries(new FormData(form).entries());
            localStorage.setItem(storageKey, JSON.stringify(data));
            renderSummary(data);
        });

        document.getElementById("clear-control").addEventListener("click", () => {
            localStorage.removeItem(storageKey);
            fillForm({ data: today() });
            renderSummary({});
        });
    </script>
</body>
</html>
