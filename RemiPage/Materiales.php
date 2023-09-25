<?php
session_start();
$conexion = mysqli_connect("localhost","root","") or
die("F");
mysqli_select_db($conexion,"id19529191_blintech") or
die("F");
mysqli_set_charset($conexion,"utf8");


ob_start();
$Ususario=$_SESSION['Usuario'];
if(!isset($Ususario)){
    header("location:Login.html");

}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Requerir</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo.png">
  <link rel="stylesheet" href="style.css">

</head>
<!-- partial:index.partial.html -->

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">

            <!-- ------------------------------------------colores mitad ------------------------------------------------------------------------------->

            <div class="box-root" style="background-image: linear-gradient(rgb(0, 0, 0) 0%, rgb(92, 0, 0) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="Principal.php" rel="dofollow">Materiales</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Registro de materiales</span>
              <form method="post" action="registroM.php">
                <div class="field padding-bottom--24">
                  <label >Fecha de solicitud</label>
                  <input type="text" name="Fs" placeholder="DD/MM/AAAA">
                </div>
                <div class="field padding-bottom--24">
                  <label >Cantidad</label>
                  <input type="text" name="Cant">
                </div>
                <div class="field padding-bottom--24">
                  <label >Unidad de medida</label>
                  <input type="text" name="Um" >
                </div>
                <div class="field padding-bottom--24">
                  <label >Descripción</label>
                  <input type="text" name="Desc">
                </div>
                <div class="field padding-bottom--24">
                  <label >Ref.</label>
                  <input type="text" name="Rf">
                </div>
                <div class="field padding-bottom--24">
                  <label >Valor unitario</label>
                  <input type="text" name="VU"  >
                </div>
                <div class="field padding-bottom--24">
                  <label >O.de T.</label>
                  <input type="text" name="Op">
                </div>
                <div class="field padding-bottom--24">
                  <label >Código de proveedor</label>
                  <input type="text" name="Cod">
                </div>
                <div class="field padding-bottom--24">
                  <label >Vendedor</label>
                  <input type="text" name="Vend">
                </div>
                <div class="field padding-bottom--24">
                  <label >Solicitado por</label>
                  <input type="text" name="Sol">
                </div>
                <div class="field padding-bottom--24">
                  <label >Verificado por</label>
                  <input type="text" name="Ver">
                </div>
                <div class="field padding-bottom--24">
                  <label >Req No.</label>
                  <input type="text" name="Req">
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit"value="Requerir">
                </div>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">©Remi</a></span>
              <span><a href="#">Contact</a></span>
              <span><a href="#">Privacy & terms</a></span>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <script>
      var x, i, j, l, ll, selElmnt, a, b, c;
      /*look for any elements with the class "custom-select":*/
      x = document.getElementsByClassName("custom-select");
      l = x.length;
      for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
      }
      function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
      }
      /*if the user clicks anywhere outside the select box,
      then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);
      </script>
</body>

</html>
<!-- partial -->
  
</body>
</html>
