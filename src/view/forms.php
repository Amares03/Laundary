

<form action="includes/dba.inc.php" method="POST">
    <label for="name">ስም</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="ስም" required>

    <label for="phone">ስልክ ቁጥር</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="ስልክ ቁጥር" required>

    <label for="type">የልብስ አይነት</label>
      <select id="type" name="type" class="form-control">
        <option selected>ሱፍ</option>
        <option>ኮት</option>
        <option>ሱሪ</option>        
        <option>ሸሚዝ</option>        
        <option>ሹራብ</option>        
      </select>

      <label for="bezat">ብዛት</label>
      <input type="number" class="form-control" id="bezat" name="bezat" placeholder="ብዛት">

     
        <label class="form-check-label" for="nech">ነጭ</label>
        <input type="checkbox" class="form-check-input" id="nech" name="nech">
     
        <div class="container my-3">
            <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
        </div>      
</form>