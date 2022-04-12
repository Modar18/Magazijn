<?=$data['title']; ?>

<form action="<?= URLROOT; ?>/financial_admin/create" method="post">
<table>
    <tbody>
        <tr>
            <td>
                <label for="name">Naam van het artikel</label>
                <br>
                <input type="text" name="naam" id="naam">
            </td>
        </tr>
        <tr>
            <td>
            <label for="name">categorie van het artikel</label>
            <br>
            <input type="text" name="categorie" id="categorie">
            </td>
        </tr>
        <tr>
            <td>
            <label for="name">omschrijving van het artikel</label>
            <br>
            <input type="text" name="omschrijving" id="omschrijving">
            </td>
        </tr>
        <tr>
            <td>
            <label for="name">prijs van het artikel</label>
            <br>
            <input type="number" name="prijs" id="prijs">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="verzenden">
            </td>
        </tr>
    </tbody>
</table>
</form>