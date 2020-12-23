<h1>Questão 04</h1>
<h2>Consulta de Avaliações</h2>
    <form class="av-container"  method="POST" action="result.php">
        <div class="av-form">
            <select name="avaliacao" id="avaliacao">
              <option value="excelente">Excelente</option>
              <option value="razoavel">Razoável</option>
              <option value="ruim">Ruim</option>
            </select>
        </div>
        <button id="sqbtn" onclick="resultado()"  type="submit">
            Consultar
</button>
</form>
    <a href="../index.html">Voltar</a>