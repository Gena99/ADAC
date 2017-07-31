<form action="/partitions/store" method="post">
    {{ csrf_field() }}
    <label for="auteur">Auteur</label>
    <input type="text" name="auteur" id="auteur">
    <br />
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre">
    <br />
    <button type="submit">Ajouter</button>
</form>