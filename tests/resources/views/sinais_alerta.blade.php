<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinais de alerta - Guia do Cidad&atilde;o</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary: #0f766e;
            --primary-dark: #115e59;
            --yellow: #ca8a04;
            --blue: #2563eb;
            --green: #16a34a;
            --bg: #eefbf8;
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

        .page-header h1 {
            font-size: 28px;
            line-height: 1.1;
            margin: 0 0 10px;
        }

        .page-header p {
            line-height: 1.45;
            margin: 0;
            max-width: 560px;
            opacity: .96;
        }

        main { padding: 18px; }

        .urgent-box {
            background: #ffffff;
            border-left: 6px solid var(--primary);
            border-radius: 20px;
            box-shadow: 0 10px 22px rgba(15, 118, 110, .14);
            margin: -4px 0 16px;
            padding: 18px;
        }

        .urgent-box h2 {
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            margin: 0 0 10px;
        }

        .urgent-box p {
            color: var(--muted);
            line-height: 1.5;
            margin: 0;
        }

        .section-title {
            color: #0f172a;
            font-size: 20px;
            margin: 22px 0 12px;
        }

        .grid {
            display: grid;
            gap: 14px;
        }

        .card {
            background: var(--card);
            border-radius: 20px;
            box-shadow: 0 8px 18px rgba(15, 23, 42, .08);
            padding: 18px;
        }

        .card h2,
        .card h3 {
            display: flex;
            align-items: center;
            gap: 10px;
            line-height: 1.2;
            margin: 0 0 10px;
        }

        .card h2 { color: var(--primary-dark); font-size: 20px; }
        .card h3 { color: #0f172a; font-size: 17px; }

        .card p,
        .card li {
            color: var(--muted);
            font-size: 15px;
            line-height: 1.5;
        }

        .card p { margin: 0; }
        .card ul { margin: 8px 0 0; padding-left: 20px; }

        .severity {
            border-radius: 999px;
            display: inline-block;
            font-size: 12px;
            font-weight: 850;
            margin-bottom: 10px;
            padding: 6px 10px;
        }

        .severity.red { background: #fecaca; color: #991b1b; }
        .severity.yellow { background: #fef3c7; color: #92400e; }
        .severity.blue { background: #dbeafe; color: #1d4ed8; }

        .step-list {
            counter-reset: step;
            display: grid;
            gap: 10px;
        }

        .step {
            background: #f8fafc;
            border-radius: 16px;
            color: var(--muted);
            line-height: 1.45;
            padding: 14px 14px 14px 46px;
            position: relative;
        }

        .step::before {
            align-items: center;
            background: var(--primary);
            border-radius: 50%;
            color: white;
            content: counter(step);
            counter-increment: step;
            display: flex;
            font-weight: 900;
            height: 24px;
            justify-content: center;
            left: 14px;
            position: absolute;
            top: 14px;
            width: 24px;
        }

        .action-grid {
            display: grid;
            gap: 12px;
            margin-top: 18px;
        }

        .action-btn {
            align-items: center;
            border-radius: 18px;
            color: white;
            display: flex;
            font-weight: 850;
            gap: 10px;
            justify-content: center;
            padding: 16px;
            text-align: center;
            text-decoration: none;
        }

        .action-btn.red { background: var(--primary); }
        .action-btn.blue { background: var(--blue); }
        .action-btn.green { background: var(--green); }

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

        .nav-item.active {
            color: var(--primary);
            font-weight: 800;
        }

        @media (min-width: 720px) {
            main {
                margin: 0 auto;
                max-width: 980px;
            }

            .grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .action-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <a href="{{ route('principal', [], false) }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
        <h1>Emerg&ecirc;ncia e sinais de alerta</h1>
        <p>Saiba reconhecer sintomas que precisam de aten&ccedil;&atilde;o r&aacute;pida em pessoas com diabetes e o que fazer antes de procurar atendimento.</p>
    </header>

    <main>
        <section class="urgent-box">
            <h2><i class="fas fa-triangle-exclamation"></i> Procure atendimento imediatamente</h2>
            <p>Desmaio, confus&atilde;o mental, falta de ar, dor no peito, sonol&ecirc;ncia extrema, v&ocirc;mitos persistentes ou ferida grave devem ser avaliados com urg&ecirc;ncia.</p>
        </section>

        <h2 class="section-title">Sintomas que merecem aten&ccedil;&atilde;o</h2>

        <section class="grid">
            <div class="card">
                <span class="severity red">Urgente</span>
                <h3><i class="fas fa-arrow-down"></i> Poss&iacute;vel glicemia baixa</h3>
                <ul>
                    <li>Tremedeira, suor frio, fome forte ou fraqueza.</li>
                    <li>Tontura, palpita&ccedil;&atilde;o, dor de cabe&ccedil;a ou vis&atilde;o emba&ccedil;ada.</li>
                    <li>Confus&atilde;o, fala enrolada, desmaio ou convuls&atilde;o.</li>
                </ul>
            </div>

            <div class="card">
                <span class="severity yellow">Aten&ccedil;&atilde;o</span>
                <h3><i class="fas fa-arrow-up"></i> Poss&iacute;vel glicemia alta</h3>
                <ul>
                    <li>Muita sede, boca seca e vontade de urinar muitas vezes.</li>
                    <li>Cansa&ccedil;o intenso, vis&atilde;o emba&ccedil;ada ou perda de peso sem explica&ccedil;&atilde;o.</li>
                    <li>N&aacute;usea, v&ocirc;mitos, dor abdominal ou respira&ccedil;&atilde;o diferente.</li>
                </ul>
            </div>

            <div class="card">
                <span class="severity red">N&atilde;o ignore</span>
                <h3><i class="fas fa-bandage"></i> Feridas e p&eacute;s</h3>
                <ul>
                    <li>Corte, bolha, rachadura ou ferida que n&atilde;o cicatriza.</li>
                    <li>Vermelhid&atilde;o, incha&ccedil;o, pus, mau cheiro ou dor forte.</li>
                    <li>Pele muito quente, escura ou perda de sensibilidade nos p&eacute;s.</li>
                </ul>
            </div>

            <div class="card">
                <span class="severity blue">Cuidado diario</span>
                <h3><i class="fas fa-eye"></i> Outros sinais importantes</h3>
                <ul>
                    <li>Formigamento, dorm&ecirc;ncia ou dor nas pernas e nos p&eacute;s.</li>
                    <li>Infec&ccedil;&otilde;es repetidas na pele, urina ou boca.</li>
                    <li>Press&atilde;o alta, dor de cabe&ccedil;a forte ou mal-estar que n&atilde;o passa.</li>
                </ul>
            </div>
        </section>

        <section class="card">
            <h2><i class="fas fa-list-check"></i> O que fazer na hora</h2>
            <div class="step-list">
                <div class="step">Se a pessoa estiver desmaiada, confusa ou com dificuldade para respirar, procure urg&ecirc;ncia imediatamente.</div>
                <div class="step">Se tiver aparelho, confira a glicemia e anote o valor, o hor&aacute;rio e os sintomas.</div>
                <div class="step">N&atilde;o ofere&ccedil;a comida ou bebida para pessoa desmaiada ou sonolenta, pois pode engasgar.</div>
                <div class="step">Leve os rem&eacute;dios, insulina, receitas, cart&atilde;o do SUS e anota&ccedil;&otilde;es de glicemia para o atendimento.</div>
            </div>
        </section>

        <section class="card">
            <h2><i class="fas fa-notes-medical"></i> Informa&ccedil;&otilde;es para contar na UBS ou hospital</h2>
            <ul>
                <li>Quando os sintomas come&ccedil;aram e se pioraram r&aacute;pido.</li>
                <li>Quais rem&eacute;dios usa, dose da insulina e hor&aacute;rio da &uacute;ltima aplica&ccedil;&atilde;o.</li>
                <li>Se comeu normalmente, ficou sem comer, teve febre, v&ocirc;mito ou infec&ccedil;&atilde;o.</li>
                <li>Valores recentes da glicemia, se tiver medido.</li>
            </ul>
        </section>

        <section class="card">
            <h2><i class="fas fa-shield-heart"></i> Como prevenir complica&ccedil;&otilde;es</h2>
            <ul>
                <li>Confira os p&eacute;s todos os dias, inclusive entre os dedos.</li>
                <li>N&atilde;o corte calos ou feridas em casa; procure orienta&ccedil;&atilde;o na UBS.</li>
                <li>Mantenha acompanhamento regular e n&atilde;o pare rem&eacute;dios por conta pr&oacute;pria.</li>
                <li>Cuide da alimenta&ccedil;&atilde;o, hidrata&ccedil;&atilde;o e atividade f&iacute;sica conforme orienta&ccedil;&atilde;o profissional.</li>
            </ul>
        </section>

        <div class="action-grid">
            <a href="{{ route('detalhes_saude', [], false) }}" class="action-btn red">
                <i class="fas fa-hospital-user"></i> Ver UBS e hospitais
            </a>
            <a href="{{ route('alimentacao_glicemia', [], false) }}" class="action-btn green">
                <i class="fas fa-apple-whole"></i> Alimenta&ccedil;&atilde;o
            </a>
            <a href="https://www.youtube.com/results?search_query=diabetes+sinais+de+alerta+glicemia" target="_blank" class="action-btn blue">
                <i class="fas fa-video"></i> Ver v&iacute;deos
            </a>
        </div>
    </main>

    <nav class="bottom-nav">
        <a href="{{ route('principal', [], false) }}" class="nav-item"><i class="fas fa-home"></i><span>In&iacute;cio</span></a>
        <a href="{{ route('sinais_alerta', [], false) }}" class="nav-item active"><i class="fas fa-triangle-exclamation"></i><span>Alertas</span></a>
        <a href="{{ route('detalhes_saude', [], false) }}" class="nav-item"><i class="fas fa-map-pin"></i><span>UBS</span></a>
    </nav>

    <script>
        if ("scrollRestoration" in history) {
            history.scrollRestoration = "manual";
        }

        window.addEventListener("pageshow", () => {
            window.scrollTo(0, 0);
        });
    </script>
</body>
</html>
