{{ include('layouts/header.php', {title:'Client Show'})}}
    <div class="container">
        <h1>Client</h1>
        <p><strong>Name : </strong>{{ clients.nom }}</p>
        <p><strong>Address : </strong>{{ clients.adresse }}</p>
        <p><strong>Phone : </strong>{{ clients.tel }}</p>
        <p><strong>Zip Code : </strong>{{ clients.code_postal }}</p>
        <p><strong>Email : </strong>{{ clients.courriel }}</p>
        <a href="{{ base }}/client/edit?id={{ clients.id }}" class="btn">Edit</a>
        <form action="{{ base }}/client/delete" method="post">
        <input type="hidden" name="id" value="{{ clients.id }}">
            <button type="submit" class="btn red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php')}}