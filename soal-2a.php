<div id="form1" action="" method="get" style="padding: 3rem;">
    <div>
        <label>Nama Anda : </label>
        <input type="text" name="nama" id="nama">
    </div>
    <br>
    <br>
    <button onclick="submit(1)">SUBMIT</button>
</div>

<div id="form2" action="" method="get" style="padding: 3rem; display: none;">
    <div>
        <label>Umur Anda : </label>
        <input type="number" name="umur" id="umur">
    </div>
    <br>
    <br>
    <button onclick="submit(2)">SUBMIT</button>
</div>

<div id="form3" action="" method="get" style="padding: 3rem; display: none;">
    <div>
        <label>Hobi Anda : </label>
        <input type="text" name="hobi" id="hobi">
    </div>
    <br>
    <br>
    <button onclick="submit(3)">SUBMIT</button>
</div>

<div id="main"></div>
<script>
    function submit(id){
        if (id == 3) {
            var form = document.querySelector('#form'+id)
            form.style.display = 'none'

            var nama = document.querySelector('#nama')
            var umur = document.querySelector('#umur')
            var hobi = document.querySelector('#hobi')

            document.querySelector('#main').innerHTML = 
            "<div>Nama : "+nama.value+"</div><br>"+
            "<div>Umur : "+umur.value+"</div><br>"+
            "<div>Hobi : "+hobi.value+"</div>"
        }

        var form = document.querySelector('#form'+id)
        var nextForm = document.querySelector('#form'+(id+1))
        form.style.display = 'none'
        nextForm.style.display = 'block'
    }
</script>