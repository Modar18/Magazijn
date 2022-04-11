<?=$data['title']; ?>

<form action="<?= URLROOT; ?>/financial_admin/update" method="post">
<table>
    <tbody>
        <tr>
            <td>
                <input type="text" name="naam" id="naam" value="<?= $data["row"]->naam; ?>">
            </td>
        </tr>
        <tr>
            <td>
            <input type="text" name="categorie" id="categorie" value="<?= $data["row"]->categorie; ?>">
            </td>
        </tr>
        <tr>
            <td>
            <input type="text" name="omschrijving" id="omschrijving" value="<?= $data["row"]->omschrijving; ?>">
            </td>
        </tr>
        <tr>
            <td>
            <input type="number" name="prijs" id="prijs" value="<?= $data["row"]->prijs; ?>">
            </td>
        </tr>
        <tr>
            <td>
            <input type="hidden" name="id" value="<?= $data["row"]->id; ?>"> 
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