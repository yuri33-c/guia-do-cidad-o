<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diabetes - Guia do Cidadao</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root { --primary: #0f766e; --text-main: #1f2937; --muted: #64748b; }
        * { box-sizing: border-box; -webkit-tap-highlight-color: transparent; }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #dcfce7 0%, #eff6ff 45%, #f8fafc 100%);
            padding: 20px;
            color: var(--text-main);
        }

        .back-btn {
            text-decoration: none;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .top-card {
            background: linear-gradient(135deg, #0f766e, #2563eb);
            color: white;
            padding: 22px;
            border-radius: 22px;
            margin-bottom: 18px;
        }

        .top-card h2 { margin: 0 0 8px; font-size: 24px; }
        .top-card p { margin: 0; opacity: .95; line-height: 1.4; }

        .category-grid { display: grid; gap: 15px; }

        .category-card {
            background: white;
            padding: 18px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 8px 18px rgba(15,23,42,.08);
        }

        .icon-box {
            min-width: 52px;
            width: 52px;
            height: 52px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 23px;
        }

        .bg-green { background: #dcfce7; color: #16a34a; }
        .bg-blue { background: #dbeafe; color: #2563eb; }
        .bg-yellow { background: #fef9c3; color: #ca8a04; }
        .bg-red { background: #fee2e2; color: #dc2626; }
        .bg-teal { background: #ccfbf1; color: #0f766e; }

        .info h3 { margin: 0; font-size: 18px; }
        .info p { margin: 5px 0 0; font-size: 13px; color: var(--muted); line-height: 1.35; }
    </style>
</head>
<body>
    <a href="{{ route('principal', [], false) }}" class="back-btn">
        <i class="fas fa-arrow-left"></i> Voltar
    </a>

    <section class="top-card">
        <h2>Area de apoio a diabetes</h2>
        <p>Escolha uma opcao para encontrar atendimento, aprender cuidados basicos e saber quando procurar ajuda.</p>
    </section>

    <div class="category-grid">
        <a href="{{ route('detalhes_saude', [], false) }}" class="category-card">
            <div class="icon-box bg-green"><i class="fas fa-hospital-user"></i></div>
            <div class="info">
                <h3>UBS e hospitais</h3>
                <p>Locais de atendimento com telefone e localizacao pelo mapa.</p>
            </div>
        </a>

        <a href="{{ route('meu_controle', [], false) }}" class="category-card">
            <div class="icon-box bg-teal"><i class="fas fa-clipboard-check"></i></div>
            <div class="info">
                <h3>Meu controle</h3>
                <p>Anote glicemia, pressao, remedios, sintomas e proxima consulta.</p>
            </div>
        </a>

        <a href="https://www.youtube.com/results?search_query=cuidados+com+diabetes+tipo+1+tipo+2" target="_blank" class="category-card">
            <div class="icon-box bg-blue"><i class="fas fa-circle-play"></i></div>
            <div class="info">
                <h3>Videos sobre diabetes</h3>
                <p>Explicacoes simples sobre glicemia, alimentacao, remedios e prevencao.</p>
            </div>
        </a>

        <a href="{{ route('alimentacao_glicemia', [], false) }}" class="category-card">
            <div class="icon-box bg-yellow"><i class="fas fa-utensils"></i></div>
            <div class="info">
                <h3>Alimentacao e glicemia</h3>
                <p>Dicas visuais para montar pratos mais seguros e controlar o acucar.</p>
            </div>
        </a>

        <a href="{{ route('sinais_alerta', [], false) }}" class="category-card">
            <div class="icon-box bg-red"><i class="fas fa-kit-medical"></i></div>
            <div class="info">
                <h3>Emergencia e sinais de alerta</h3>
                <p>Confusao, desmaio, ferida grave ou mal-estar intenso precisam de atendimento.</p>
            </div>
        </a>
    </div>

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
