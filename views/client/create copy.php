{{ include('layouts/header.php', {title:'Client Create'})}}
<div class="container">
        <form method="post">
            <h2>New Client</h2>
            <label>Name
                <input type="text" name="nom" value="{{ inputs.nom }}">
            </label>
             {% if errors.nom is defined %}                   
             <span class="error">{{ errors.nom }}</span>
            {% endif %}
             <label>Adresse
                <input type="text" name="adresse" value="{{ inputs.adresse }}">
            </label>
            {% if errors.adresse is defined %}                   
             <span class="error">{{ errors.adresse }}</span>
            {% endif %}
            <label>Tel
                <input type="text" name="tel" value="{{ inputs.tel }}">
            </label>
            {% if errors.tel is defined %}                   
             <span class="error">{{ errors.tel }}</span>
            {% endif %}
            <label>Zip Code
                <input type="text" name="code_postal" value="{{ inputs.code_postal }}">
            </label>
            {% if errors.code_postal is defined %}                   
             <span class="error">{{ errors.code_postal }}</span>
            {% endif %}
            <label>Email
                <input type="courriel" name="courriel" value="{{ inputs.courriel }}">
            </label>
            {% if errors.courriel is defined %}                   
             <span class="error">{{ errors.courriel }}</span>
            {% endif %}
            <label>City
                <select name="city_id">
                    <option value="">Select</option>
                    {% for city in cities %}
                        <option value="{{city.id}}" {% if(city.id == inputs.city_id) %} selected {%endif%}>{{ city.city}}</option>
                    {% endfor %}
                </select>
            </label>
            {% if errors.city_id is defined %}                   
             <span class="error">{{ errors.city_id }}</span>
            {% endif %}
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php')}}