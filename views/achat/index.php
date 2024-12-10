{{ include('layouts/header.php', {title:'Clients'})}}
<header class="entete">
    <section class="fil-ariane container">
        <span><a href="">Vehicules </a> > <a href=""> Tous les véhicules</a></span>
    </section>
</header>
<div class="container">
    <main>
        <h1>Réservations</h1>
        <table>
            <thead>
                <tr>
                    <th>N° de Réservation</th>
                    <th>Date</th>
                    <th>Id voiture</th>
                    <th>Id succursale</th>
                    <th>Id client</th>
                </tr>
            </thead>
            <tbody>
                {% for achat in achats %}
                <tr>
                    <td><a href="{{ base }}/achat/show?id={{achat.id}}">{{achat.id}}</a></td>
                    <td>{{achat.date_achat}}</td>
                    <td>{{ achat.id_voiture }}
                        {% for modele in modeles %}
                            {% if modele.id_voiture == achat.id_voiture %}
                                {{ modele.modele }}
                            {% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ achat.id_succursale }}
                        {% for succursale in succursales %}
                            {% if succursale.id_succursale == achat.id_succursale %}
                                {{ succursale.nom }}
                            {% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ achat.id_client }}
                        {% for client in clients %}
                            {% if client.id == achat.id_client %}
                                {{ client.nom }}
                            {% endif %}
                        {% endfor %}
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        <a href="{{ base }}/client/create" class="bouton">New Client</a>
    </main>
</div>

{{ include('layouts/footer.php')}}