<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimenta&ccedil;&atilde;o e glicemia - Guia do Cidad&atilde;o</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary: #0f766e;
            --primary-dark: #115e59;
            --green: #16a34a;
            --red: #dc2626;
            --blue: #2563eb;
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
            max-width: 520px;
            opacity: .96;
        }

        main { padding: 18px; }

        .notice {
            background: #fff;
            border-left: 5px solid var(--blue);
            border-radius: 18px;
            box-shadow: 0 8px 18px rgba(15, 23, 42, .08);
            color: var(--muted);
            line-height: 1.45;
            margin: -4px 0 16px;
            padding: 16px;
        }

        .section-title {
            color: #0f172a;
            font-size: 20px;
            margin: 22px 0 12px;
        }

        .card {
            background: var(--card);
            border-radius: 20px;
            box-shadow: 0 8px 18px rgba(15, 23, 42, .08);
            margin-bottom: 14px;
            padding: 18px;
        }

        .card h2,
        .card h3 {
            align-items: center;
            display: flex;
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

        .plate {
            display: grid;
            gap: 10px;
            grid-template-columns: 1fr;
        }

        .plate-part {
            border-radius: 16px;
            padding: 14px;
        }

        .plate-part strong {
            display: block;
            margin-bottom: 5px;
        }

        .vegetables { background: #dcfce7; color: #166534; }
        .protein { background: #dbeafe; color: #1d4ed8; }
        .carb { background: #fef9c3; color: #a16207; }

        .food-grid {
            display: grid;
            gap: 12px;
        }

        .food-box {
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 15px;
        }

        .food-box.good { border-color: #bbf7d0; background: #f0fdf4; }
        .food-box.care { border-color: #fed7aa; background: #fff7ed; }
        .food-box.avoid { border-color: #fecaca; background: #fff1f2; }

        .tag {
            border-radius: 999px;
            display: inline-block;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 8px;
            padding: 5px 10px;
        }

        .tag.good { background: #bbf7d0; color: #166534; }
        .tag.care { background: #fed7aa; color: #9a3412; }
        .tag.avoid { background: #fecaca; color: #991b1b; }

        .meal-list {
            display: grid;
            gap: 10px;
        }

        .meal {
            background: #f8fafc;
            border-radius: 16px;
            padding: 14px;
        }

        .meal strong {
            color: var(--primary-dark);
            display: block;
            margin-bottom: 5px;
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

        .action-btn.blue { background: var(--blue); }
        .action-btn.red { background: var(--red); }

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

            .plate,
            .food-grid,
            .action-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .meal-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <a href="{{ route('principal', [], false) }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
        <h1>Alimenta&ccedil;&atilde;o e glicemia</h1>
        <p>Orienta&ccedil;&otilde;es simples para montar refei&ccedil;&otilde;es mais seguras, reduzir picos de a&ccedil;&uacute;car e acompanhar melhor o cuidado com diabetes.</p>
    </header>

    <main>
        <div class="notice">
            Este guia ajuda no dia a dia, mas n&atilde;o substitui consulta com nutricionista, enfermeiro ou m&eacute;dico. Se voc&ecirc; usa insulina ou rem&eacute;dios, siga a orienta&ccedil;&atilde;o da sua equipe de sa&uacute;de.
        </div>

        <section class="card">
            <h2><i class="fas fa-plate-wheat"></i> Como montar um prato mais equilibrado</h2>
            <div class="plate">
                <div class="plate-part vegetables">
                    <strong>1/2 do prato: verduras e legumes</strong>
                    Alface, couve, tomate, pepino, cenoura, abobrinha, chuchu, repolho e outros vegetais.
                </div>
                <div class="plate-part protein">
                    <strong>1/4 do prato: prote&iacute;na</strong>
                    Frango, peixe, ovo, carne magra, queijo branco, feij&atilde;o, lentilha ou gr&atilde;o-de-bico.
                </div>
                <div class="plate-part carb">
                    <strong>1/4 do prato: carboidrato</strong>
                    Arroz, macarr&atilde;o, batata, macaxeira, milho ou farinha em por&ccedil;&atilde;o controlada.
                </div>
            </div>
        </section>

        <h2 class="section-title">O que escolher com mais seguran&ccedil;a</h2>

        <section class="food-grid">
            <div class="food-box good">
                <span class="tag good">Pode priorizar</span>
                <h3><i class="fas fa-circle-check"></i> Boas escolhas</h3>
                <ul>
                    <li>Verduras e legumes todos os dias.</li>
                    <li>Feij&atilde;o, lentilha e gr&atilde;o-de-bico.</li>
                    <li>Frutas inteiras, como ma&ccedil;&atilde;, banana pequena, mam&atilde;o e laranja.</li>
                    <li>&Aacute;gua no lugar de refrigerante ou suco ado&ccedil;ado.</li>
                </ul>
            </div>

            <div class="food-box care">
                <span class="tag care">Com cuidado</span>
                <h3><i class="fas fa-scale-balanced"></i> Controlar quantidade</h3>
                <ul>
                    <li>Arroz, macarr&atilde;o, p&atilde;o, farinha, tapioca e cuscuz.</li>
                    <li>Batata, macaxeira, milho e outros tub&eacute;rculos.</li>
                    <li>Frutas muito maduras ou em grande quantidade.</li>
                    <li>Produtos diet ou light, pois tamb&eacute;m podem ter carboidratos.</li>
                </ul>
            </div>

            <div class="food-box avoid">
                <span class="tag avoid">Evitar excesso</span>
                <h3><i class="fas fa-ban"></i> Aumentam a glicemia r&aacute;pido</h3>
                <ul>
                    <li>Refrigerante, suco de caixinha e bebidas ado&ccedil;adas.</li>
                    <li>Doces, bolos, biscoitos recheados e sobremesas frequentes.</li>
                    <li>Frituras e alimentos muito gordurosos.</li>
                    <li>Grandes por&ccedil;&otilde;es de arroz, macarr&atilde;o ou p&atilde;o branco.</li>
                </ul>
            </div>
        </section>

        <section class="card">
            <h2><i class="fas fa-clock"></i> Exemplo de rotina alimentar</h2>
            <div class="meal-list">
                <div class="meal">
                    <strong>Caf&eacute; da manh&atilde;</strong>
                    P&atilde;o integral pequeno ou cuscuz em pouca quantidade, ovo ou queijo branco e caf&eacute; sem a&ccedil;&uacute;car.
                </div>
                <div class="meal">
                    <strong>Almo&ccedil;o</strong>
                    Salada, legumes, feij&atilde;o, uma por&ccedil;&atilde;o pequena de arroz e frango, peixe ou ovo.
                </div>
                <div class="meal">
                    <strong>Lanche</strong>
                    Fruta inteira, iogurte natural sem a&ccedil;&uacute;car ou castanhas em pequena quantidade.
                </div>
                <div class="meal">
                    <strong>Jantar</strong>
                    Refei&ccedil;&atilde;o parecida com o almo&ccedil;o, com por&ccedil;&atilde;o menor se voc&ecirc; costuma dormir logo depois.
                </div>
            </div>
        </section>

        <section class="card">
            <h2><i class="fas fa-droplet"></i> Glicemia: cuidados importantes</h2>
            <ul>
                <li>Anote os valores da glicemia quando medir e leve essas anota&ccedil;&otilde;es para a consulta.</li>
                <li>Evite ficar muitas horas sem comer se isso foi orientado como risco para voc&ecirc;.</li>
                <li>Se a glicemia ficar muito alta ou muito baixa com frequ&ecirc;ncia, procure a UBS para reavaliar o cuidado.</li>
                <li>N&atilde;o pare rem&eacute;dios ou insulina por conta pr&oacute;pria.</li>
            </ul>
        </section>

        <section class="card">
            <h2><i class="fas fa-cart-shopping"></i> Lista simples para comprar</h2>
            <ul>
                <li>Verduras: alface, couve, cheiro-verde, repolho.</li>
                <li>Legumes: tomate, cenoura, abobrinha, chuchu, pepino.</li>
                <li>Prote&iacute;nas: ovos, frango, sardinha, peixe, carne magra.</li>
                <li>Base da refei&ccedil;&atilde;o: feij&atilde;o, arroz em pouca quantidade, aveia, frutas inteiras.</li>
            </ul>
        </section>

        <div class="action-grid">
            <a href="{{ route('detalhes_saude', [], false) }}" class="action-btn blue">
                <i class="fas fa-hospital-user"></i> Ver UBS e hospitais
            </a>
            <a href="{{ route('sinais_alerta', [], false) }}" class="action-btn red">
                <i class="fas fa-triangle-exclamation"></i> Sinais de alerta
            </a>
            <a href="https://www.youtube.com/results?search_query=diabetes+alimentacao+glicemia" target="_blank" class="action-btn blue">
                <i class="fas fa-video"></i> Ver v&iacute;deos
            </a>
        </div>
    </main>

    <nav class="bottom-nav">
        <a href="{{ route('principal', [], false) }}" class="nav-item"><i class="fas fa-home"></i><span>In&iacute;cio</span></a>
        <a href="{{ route('alimentacao_glicemia', [], false) }}" class="nav-item active"><i class="fas fa-apple-whole"></i><span>Alimenta&ccedil;&atilde;o</span></a>
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
