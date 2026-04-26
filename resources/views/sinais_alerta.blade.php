<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinais de alerta - Guia do Cidadao</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #0f766e; --red: #dc2626; --blue: #2563eb; --text: #1f2937; --muted: #64748b; }
        * { box-sizing: border-box; -webkit-tap-highlight-color: transparent; }
        body { margin: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; background: linear-gradient(180deg, #dcfce7 0%, #eff6ff 45%, #f8fafc 100%); color: var(--text); padding-bottom: 86px; }
        .page-header { background: linear-gradient(135deg, #0f766e, #2563eb); border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; color: white; padding: 20px 20px 34px; }
        .back-btn { color: white; display: inline-flex; align-items: center; gap: 8px; font-weight: 800; margin-bottom: 22px; text-decoration: none; }
        .page-header h1 { font-size: 28px; line-height: 1.1; margin: 0 0 10px; }
        .page-header p { line-height: 1.45; margin: 0; opacity: .96; }
        main { padding: 18px; }
        .urgent-box, .card { background: white; border-radius: 20px; box-shadow: 0 8px 18px rgba(15, 23, 42, .08); margin-bottom: 14px; padding: 18px; }
        .urgent-box { border-left: 6px solid var(--red); color: #7f1d1d; }
        .card h2, .card h3, .urgent-box h2 { display: flex; align-items: center; gap: 10px; line-height: 1.2; margin: 0 0 10px; }
        .card h2, .urgent-box h2 { color: #115e59; font-size: 20px; }
        .card h3 { color: #0f172a; font-size: 17px; }
        .card p, .card li, .urgent-box p { color: var(--muted); font-size: 15px; line-height: 1.5; }
        .card ul { margin: 8px 0 0; padding-left: 20px; }
        .grid { display: grid; gap: 14px; }
        .action-grid { display: grid; gap: 12px; margin-top: 18px; }
        .action-btn { align-items: center; border-radius: 18px; color: white; display: flex; font-weight: 850; gap: 10px; justify-content: center; padding: 16px; text-align: center; text-decoration: none; }
        .action-btn.red { background: var(--red); } .action-btn.blue { background: var(--blue); } .action-btn.green { background: var(--primary); }
        .bottom-nav { background: white; border-top: 1px solid #e5e7eb; bottom: 0; display: flex; justify-content: space-around; left: 0; padding: 11px 0; position: fixed; width: 100%; z-index: 10; }
        .nav-item { align-items: center; color: var(--muted); display: flex; flex-direction: column; font-size: 11px; gap: 4px; text-decoration: none; }
        .nav-item.active { color: var(--primary); font-weight: 800; }
        @media (min-width: 720px) { main { margin: 0 auto; max-width: 980px; } .grid, .action-grid { grid-template-columns: repeat(2, 1fr); } }
    </style>
</head>
<body>
    <header class="page-header">
        <a href="{{ route('principal', [], false) }}" class="back-btn"><i class="fas fa-arrow-left"></i> Voltar</a>
        <h1>Emergencia e sinais de alerta</h1>
        <p>Saiba reconhecer sintomas que precisam de atencao rapida em pessoas com diabetes.</p>
    </header>
    <main>
        <section class="urgent-box">
            <h2><i class="fas fa-triangle-exclamation"></i> Procure atendimento imediatamente</h2>
            <p>Desmaio, confusao mental, falta de ar, dor no peito, sonolencia extrema, vomitos persistentes ou ferida grave devem ser avaliados com urgencia.</p>
        </section>
        <section class="grid">
            <div class="card"><h3><i class="fas fa-arrow-down"></i> Possivel glicemia baixa</h3><ul><li>Tremedeira, suor frio, fome forte ou fraqueza.</li><li>Tontura, palpitacao, dor de cabeca ou visao embacada.</li><li>Confusao, fala enrolada, desmaio ou convulsao.</li></ul></div>
            <div class="card"><h3><i class="fas fa-arrow-up"></i> Possivel glicemia alta</h3><ul><li>Muita sede, boca seca e urinar muitas vezes.</li><li>Cansaco intenso, visao embacada ou perda de peso sem explicacao.</li><li>Nausea, vomitos, dor abdominal ou respiracao diferente.</li></ul></div>
            <div class="card"><h3><i class="fas fa-bandage"></i> Feridas e pes</h3><ul><li>Corte, bolha, rachadura ou ferida que nao cicatriza.</li><li>Vermelhidao, inchaco, pus, mau cheiro ou dor forte.</li><li>Perda de sensibilidade nos pes.</li></ul></div>
            <div class="card"><h3><i class="fas fa-notes-medical"></i> O que levar</h3><ul><li>Receitas, remedios e insulina.</li><li>Anotacoes da glicemia.</li><li>Informar quando os sintomas comecaram.</li></ul></div>
        </section>
        <div class="action-grid">
            <a href="{{ route('detalhes_saude', [], false) }}" class="action-btn red"><i class="fas fa-hospital-user"></i> Ver UBS</a>
            <a href="{{ route('alimentacao_glicemia', [], false) }}" class="action-btn green"><i class="fas fa-apple-whole"></i> Alimentacao</a>
        </div>
    </main>
    <nav class="bottom-nav">
        <a href="{{ route('principal', [], false) }}" class="nav-item"><i class="fas fa-home"></i><span>Inicio</span></a>
        <a href="{{ route('sinais_alerta', [], false) }}" class="nav-item active"><i class="fas fa-triangle-exclamation"></i><span>Alertas</span></a>
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
