{{ include('layouts/header.php', {title:'Clients'})}}
<header class="entete">
    <section class="fil-ariane container">
        <span><a href="">Vehicules </a> > <a href=""> Tous les véhicules</a></span>
    </section>
</header>
<div class="container">
    <main>
        <h1>Client</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Clients</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Tel</th>
                    <th>courriel</th>
                    <th>Suppr.</th>
                </tr>
            </thead>
            <tbody>
                {% for client in clients %}
                <tr>
                    <td><a href="{{ base }}/client/show?id={{client.id}}">{{client.id}}</a></td>
                    <td>{{client.nom}}</td>
                    <td>{{client.adresse}}</td>
                    <td>{{client.code_postal}}</td>
                    <td>{{client.tel}}</td>
                    <td>{{client.courriel}}</td>
                    <td>
                        <form action="client-delete.php" method="post">
                            <input type="hidden" name="id" value="{{client.id}}">
                            <button type="submit" class="bouton">X</button>
                        </form>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        <a href="{{ base }}/client/create" class="bouton">New Client</a>
    </main>
</div>

{{ include('layouts/footer.php')}}