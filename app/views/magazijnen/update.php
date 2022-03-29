
<?= $data['title']; ?>

<form action="<?= URLROOT; ?>magazijnen/update" method="POST">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="artikelen" id="artikelen" value="<?=$data["row"]->artikelen?>">
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" name="categorie" id="categorie" value="<?=$data["row"]->categorie?>">

                </td>
            </tr>
            <tr>
                <td>
                <input type="number" name="totaal" id="totaal" value="<?=$data["row"]->totaal?>">

                </td>
            </tr>
            <tr>
                <td>
                <input type="hidden" name="id" value="<?=$data["row"]->id?>">

                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Verzenden">
                </td>
            </tr>
        </tbody>
    </table>
</form>