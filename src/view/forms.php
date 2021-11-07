
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<form action="includes/dba.inc.php" method="POST">
    <label for="name">ስም</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="ስም" required>

    <label for="phone">ስልክ ቁጥር</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="ስልክ ቁጥር" required>
     <div class="row">
       <div class="col">
          <label for="type">የልብስ አይነት</label>
      <select id="type" name="type" class="form-control">
        <option selected>ሱፍ</option>
        <option>ኮት</option>
        <option>ሱሪ</option>        
        <option>ሸሚዝ</option>        
        <option>ሹራብ</option>        
      </select>
       </div>
       <div class="col">
         <label for="bezat">ብዛት</label>
      <input type="number" class="form-control" id="bezat" name="bezat" placeholder="ብዛት">
       </div>
       
     </div>
   
      <label for="ቀን">የሚመለስበት ቀን</label>
      <input type="date" class="form-control" id="ቀን" name="date" placeholder="የሚመለስበት ቀን" required>

     
        <label class="form-check-label" for="nech">ነጭ</label>
        <input type="checkbox" class="form-check-input" id="nech" name="nech">
     
        <div class="container my-3">
            <button type="submit" class="btn btn-primary btn-lg">ጫን</button>
        </div>      
</form>
</div>