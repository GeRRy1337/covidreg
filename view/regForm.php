<div class="container">
    <form method="post">
        <div class="container">
            <h2>Oltás regisztráció</h2>
            <div class="form-group">
                <label for="nev">Név:</label>
                <input type="text" name="nev" id="nev" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="taj">Taj:</label>
                <input type="text" name="taj" id="taj" maxlength="11" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="szul">Születési idő:</label>
                <input type="date" name="szul" id="szul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="vakcina">Vakcina:</label>
                <select name="vakcina" id="vakcina" class="form-control" required>
                    <option>Kérlek válasz vakcinát</option>
                    <option value="Pfizer">Pfizer</option>
                    <option value="Moderna">Moderna</option>
                    <option value="AstraZeneca">AstraZeneca</option>
                    <option value="Szputnyik V">Szputnyik V</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="Janssen">Janssen</option>
                </select>
            </div>
            <div class="form-group">
                <label for="megjegyzes">Megjegyzés:</label>
                <input type="text" name="megjegyzes" id="megjegyzes" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="regForm" class="btn btn-secondary">
            </div>
        </div>
    </form>
</div>
<script>
    document.getElementById("taj").oninput=function(){
        var val=document.getElementById("taj").value;
        if(val.length==3){
            document.getElementById("taj").value=val+"-";
        }
        if(val.length==7){
            document.getElementById("taj").value=val+"-";
        }
    }
</script>