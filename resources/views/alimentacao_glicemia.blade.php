<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentacao e glicemia - Guia do Cidadao</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #0f766e; --blue: #2563eb; --text: #1f2937; --muted: #64748b; }
        * { box-sizing: border-box; -webkit-tap-highlight-color: transparent; }
        body { margin: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; background: linear-gradient(180deg, #dcfce7 0%, #eff6ff 45%, #f8fafc 100%); color: var(--text); padding-bottom: 86px; }
        .page-header { background: linear-gradient(135deg, #0f766e, #2563eb); border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; color: white; padding: 20px 20px 34px; }
        .back-btn { color: white; display: inline-flex; align-items: center; gap: 8px; font-weight: 800; margin-bottom: 22px; text-decoration: none; }
        .page-header h1 { font-size: 28px; line-height: 1.1; margin: 0 0 10px; }
        .page-header p { line-height: 1.45; margin: 0; opacity: .96; }
        main { padding: 18px; }
        .card { background: white; border-radius: 20px; box-shadow: 0 8px 18px rgba(15, 23, 42, .08); margin-bottom: 14px; padding: 18px; }
        .card h2, .card h3 { align-items: center; display: flex; gap: 10px; line-height: 1.2; margin: 0 0 10px; }
        .card h2 { color: #115e59; font-size: 20px; }
        .card h3 { color: #0f172a; font-size: 17px; }
        .card p, .card li { color: var(--muted); font-size: 15px; line-height: 1.5; }
        .card p { margin: 0; }
        .card ul { margin: 8px 0 0; padding-left: 20px; }
        .plate { display: grid; gap: 10px; }
        .plate-part { border-radius: 16px; padding: 14px; }
        .plate-part strong { display: block; margin-bottom: 5px; }
        .vegetables { background: #dcfce7; color: #166534; }
        .protein { background: #dbeafe; color: #1d4ed8; }
        .carb { background: #fef9c3; color: #a16207; }
        .action-grid { display: grid; gap: 12px; margin-top: 18px; }
        .action-btn { align-items: center; border-radius: 18px; color: white; display: flex; font-weight: 850; gap: 10px; justify-content: center; padding: 16px; text-align: center; text-decoration: none; }
        .action-btn.blue { background: var(--blue); }
        .action-btn.green { background: var(--primary); }
        .bottom-nav { background: white; border-top: 1px solid #e5e7eb; bottom: 0; display: flex; justify-content: space-around; left: 0; padding: 11px 0; position: fixed; width: 100%; z-index: 10; }
        .nav-item { align-items: center; color: var(--muted); display: flex; flex-direction: column; font-size: 11px; gap: 4px; text-decoration: none; }
        .nav-item.active { color: var(--primary); font-weight: 800; }
        @media (min-width: 720px) { main { margin: 0 auto; max-width: 980px; } .plate, .action-grid { grid-template-columns: repeat(3, 1fr); } }
    </style>
</head>
<body>
    <header class="page-header">
        <a href="{{ route('principal', [], false) }}" class="back-btn"><i class="fas fa-arrow-left"></i> Voltar</a>
        <h1>Alimentacao e glicemia</h1>
        <p>Orientacoes simples para montar refeicoes mais seguras e reduzir picos de acucar no sangue.</p>
    </header>

    <main>
        <section class="card">
            <h2><i class="fas fa-plate-wheat"></i> Como montar o prato</h2>
            <div class="plate">
                <div class="plate-part vegetables"><strong>1/2 do prato: verduras e legumes</strong>Alface, couve, tomate, pepino, cenoura, abobrinha e outros vegetais.</div>
                <div class="plate-part protein"><strong>1/4 do prato: proteina</strong>Frango, peixe, ovo, carne magra, feijao, lentilha ou grao-de-bico.</div>
                <div class="plate-part carb"><strong>1/4 do prato: carboidrato</strong>Arroz, macarrao, batata, macaxeira, milho ou farinha em porcao controlada.</div>
            </div>
        </section>

        <section class="card">
            <h2><i class="fas fa-circle-check"></i> Boas escolhas</h2>
            <ul>
                <li>Verduras e legumes todos os dias.</li>
                <li>Frutas inteiras em vez de sucos adocados.</li>
                <li>Agua no lugar de refrigerante.</li>
                <li>Feijao, ovos, peixe e frango como apoio nas refeicoes.</li>
            </ul>
        </section>

        <section class="card">
            <h2><i class="fas fa-ban"></i> Evite excesso</h2>
            <ul>
                <li>Refrigerante, suco de caixinha e bebidas adocadas.</li>
                <li>Doces, bolos, biscoitos recheados e sobremesas frequentes.</li>
                <li>Grandes porcoes de arroz, macarrao, pao branco e farinha.</li>
            </ul>
        </section>

        <section class="card">
            <h2><i class="fas fa-droplet"></i> Acompanhe a glicemia</h2>
            <p>Se voce usa aparelho, anote os valores e leve nas consultas. Nao pare remedios ou insulina por conta propria.</p>
        </section>

        <div class="action-grid">
            <a href="{{ route('detalhes_saude', [], false) }}" class="action-btn blue"><i class="fas fa-hospital-user"></i> Ver UBS</a>
            <a href="{{ route('sinais_alerta', [], false) }}" class="action-btn green"><i class="fas fa-triangle-exclamation"></i> Sinais de alerta</a>
            <a href="https://www.youtube.com/results?search_query=diabetes+alimentacao+glicemia" target="_blank" class="action-btn blue"><i class="fas fa-video"></i> Videos</a>
        </div>
    </main>

    <nav class="bottom-nav">
        <a href="{{ route('principal', [], false) }}" class="nav-item"><i class="fas fa-home"></i><span>Inicio</span></a>
        <a href="{{ route('alimentacao_glicemia', [], false) }}" class="nav-item active"><i class="fas fa-apple-whole"></i><span>Alimentacao</span></a>
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
    </script>
</body>
</html>
