<div class="container">
    <form method="post" class="form-control">
        <div class="center">
            <h2>Oltás regisztráció</h2>
            <div class="form-divs">
                <label for="nev">Név:</label>
                <input type="text" name="nev" id="nev" required>
            </div>
            <div class="form-divs">
                <label for="taj">Taj:</label>
                <input type="text" name="taj" id="taj" maxlength="11" required>
            </div>
            <div class="form-divs">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-divs">
                <label for="szul">Születési idő:</label>
                <input type="date" name="szul" id="szul" required>
            </div>
            <div class="form-divs">
                <label for="vakcina">Vakcina:</label>
                <select name="vakcina" id="vakcina" required>
                    <option>Kérlek válasz vakcinát</option>
                    <option value="Pfizer">Pfizer</option>
                    <option value="Moderna">Moderna</option>
                    <option value="AstraZeneca">AstraZeneca</option>
                    <option value="Szputnyik V">Szputnyik V</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="Janssen">Janssen</option>
                </select>
            </div>
            <div class="form-divs">
                <label for="megjegyzes">Megjegyzés:</label>
                <input type="text" name="megjegyzes" id="megjegyzes">
            </div>
            <input type="submit" name="regForm" class="btn btn-secondary">
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