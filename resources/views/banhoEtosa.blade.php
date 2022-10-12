@extends('template')
<div id="textoFormBanho" class="shadow">
    <form method="post" action="dataBanhoTosa">
        @csrf
        <h4>Preencha os dados</h4><br>
        Nome do Pet<br>
        <input id="input" type="text" class="shadow" name="pet" required><br><br>
        Porte<br>
        <select name="porte" id="input" class="shadow" required>
            <option value="">Nenhum</option>
            <option value="Miniatura">Miniatura (até 6kg)</option>
            <option value="Pequeno">Pequeno (6 a 15kg)</option>
            <option value="Médio">Médio (15 a 25kg)</option>
            <option value="Grande">Grande (25 a 45kg)</option>
            <option value="Gigante">Gigante (45 a 60kg)</option>
        </select><br><br>
        Opções<br>
        <input id="radio" type="radio" name="opcao" value="Banho"> Somente Banho
        <input id="radio" type="radio" name="opcao" value="Banho e Tosa"> Banho + Tosa<br><br>
        Data<br>
        <input id="input" type="date" class="shadow" required><br><br>
        Horários Disponíveis<br>
        <select name="horario" id="input" class="shadow" required>
            <option value="">Nenhum</option>
            <option value="08h">08h</option>
            <option value="09h">09h</option>
            <option value="10h">10h</option>
            <option value="11h">11h</option>
            <option value="13h">13h</option>
            <option value="14h">14h</option>
            <option value="15h">15h</option>
            <option value="16h">16h</option>
            <option value="17h">17h</option>
            <option value="18h">18h</option>
            <option value="19h">19h</option>
        </select><br><br>
        <input id="botao" class="shadow" type="submit" name="enviar" value="Marcar">
    </form>
</div>
<div id="textoBanhoTosa">
    <p id="p">Tabela de Preços (Banho):</p>
    <table id="table">
        <tr>
            <th id="th">Porte</th>
            <th id="th">Valor</th>
        </tr>
        <tr>
            <td id="td">Miniautra</td>
            <td id="td">R$ 20,00</td>
        </tr>
        <tr>
            <td id="td">Pequeno</td>
            <td id="td">R$ 40,00</td>
        </tr>
        <tr>
            <td id="td">Médio</td>
            <td id="td">R$ 60,00</td>
        </tr>
        <tr>
            <td id="td">Grande</td>
            <td id="td">R$ 80,00</td>
        </tr>
        <tr>
            <td id="td">Gigante</td>
            <td id="td">R$ 100,00</td>
        </tr>
    </table>
    <p class="alert alert-info">Obs.: Tosa tem um adicional de R$ 15,00 ao valor do banho.</p>
</div>