<h1>Questão 03</h1>
    <a href="../index.html">Voltar</a>
    <form class="sq-container" method="POST" action="result.php">
        <div class="sq-form">
            <p>Informe saque (R$)</p>
            <input id="valor"  name="valor" type="number" min="2"/>
        </div>
        <button id="sqbtn" onclick="resultado()"  type="submit">Identificar Cédulas</button>
    </form>