{{ include('layouts/header.php', {title:'Clients'})}}
<header class="entete">
    <section class="fil-ariane container">
        <span><a href="">Vehicules </a> > <a href=""> Tous les véhicules</a></span>
    </section>
</header>


<div class="container">

    <main>
        <h1>Commande</h1>

        <table>
            <thead>
                <tr>
                    <th>Achats</th>
                    <th>Date d'achat</th>
                    <th>Id voiture</th>
                    <th>Id succursale</th>
                </tr>
            </thead>
            <tbody>
                 {% for achat in achats %}
                    <tr>
                        <td><a href="{{ base }}/achat/show?id={{achat.id}}">{{achat.id}}</a></td>
                        <td>{{achat.date_achat}}</td>
                        <td> {% for modele in modeles %}
                                   {% if(modele.id_voiture == achat.id_voiture) %} 
                                    {{modele.modele}}
                                   {% endif %}
                            {% endfor %}
                        </td>
                        <td>Succursale     </td>
                    </tr>
            </tbody>
        </table>
        <p></p>
        <a href="order-create.php" class="bouton">Nouvelle commande</a>
        <a href="order-edit.php?id=<?= $row['id']; ?>" class="bouton">Modifier la dernière commande</a>


    </main>

</div>


{{ include('layouts/footer.php')}}