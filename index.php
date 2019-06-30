<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bem vindo</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style type="text/css">
html{margin:0; width:100%; height:100%;}
body{background-color:#F4F4F4; height:100%; margin:0 auto; overflow:hidden;}
#header{width:100%; height:185px; background-color:#E9E9E9; text-align:center; vertical-align:middle;}
#container{margin:0 auto; text-align:center;}
.box{width:300px; height:170px; line-height:120px; background-color:#DDD; display:inline-block; margin:13px; text-align:center;
  line-height: 200px; border-radius:10px; cursor:pointer;transition: all .2s ease-in-out;}
.textbox{font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-size:21px; color:#333;}
span {
  display: inline-block;
  vertical-align: middle;
  line-height: 338px;
}
#painel{width:100%; height:300px; display:inline-block; margin-top:30px; margin-bottom:30px; padding-top:30px; text-align:center;}
#lista{width:60%; height:auto; background-color:#EAEAEA; display:inline-block; margin-top:30px; margin-bottom:30px; text-align:center; padding:20px; border-bottom-right-radius:20px; border-top-right-radius:20px;animation:1s ease-in-out 0s 1 surgelista;transition: all .2s ease-in-out;}
.lista:hover{font-size:24px;transform: scale(1.1);}
#resultado{width:90%; background-color:#FFF; display:inline-block; margin-top:30px; margin-bottom:30px; text-align:center; display:inline-block;}
#logo{width:160px; height:160px; background-image:url(laces.jpg); margin:20px;}
.categorias{cursor:pointer;transition: all .2s ease-in-out;}
.categorias:hover{font-size:23px;transform: scale(1.1);}
.box:hover{width:310px;transform: scale(1.1);}
@keyframes surgir {
  0% {
    transform: translateX(-200%);
  }
  100% {
    transform: translateX(0);
  }
}
@keyframes surgelista {
  0% {
    transform: translateX(200%);
  }
  100% {
    transform: translateX(0);
  }
}
@media screen and (max-width: 1000px) {
  body {
    overflow:auto;
  }
  #logo{ width:300px;!important}
  #painel{ height:400px;!important}
}
.categorias {animation: 1s ease-in-out 0s 1 surgir;}
</style>
</head>
<body>
	<div id="header">
        <span style="color:black; font-family:Tahoma, Geneva, sans-serif; font-size:30px;line-height: normal;">
        	<img src="logo.png" style="margin-top:-30px;" />
        </span>
    </div><br /><br />
    
<div id="container">
     <div class="box" onclick="mostra(1);" style=" background:url('saude.png') no-repeat center;">
     	<span class="textbox">
         SAÚDE
        </span>    
     </div>
     <div class="box" onclick="mostra(2);" style=" background:url('dhj.png') no-repeat center;">
     	<span class="textbox">
         DIREITOS HUMANOS E  JUSTIÇA
        </span>    
     </div>
     <div class="box" onclick="mostra(3);" style=" background:url('TRAB.png') no-repeat center;">
     	<span class="textbox">
         PRODUÇÃO E TRABALHO
        </span>    
     </div>
     <div class="box" onclick="mostra(4);" style=" background:url('educacao.png') no-repeat center;">
     	<span class="textbox">
         EDUCAÇÃO
        </span>    
     </div><br />
     <div class="box" onclick="mostra(5);" style=" background:url('mam.png') no-repeat center;">
     	<span class="textbox">
         MEIO AMBIENTE
        </span>    
     </div>
     <div class="box" onclick="mostra(6);" style=" background:url('cultura.png') no-repeat center;">
     	<span class="textbox">
         CULTURA
        </span>    
     </div>
     <div class="box" onclick="mostra(7);" style=" background:url('tecnologia.png') no-repeat center;">
     	<span class="textbox">
         TECNOLOGIA
        </span>    
     </div>
     <div class="box" onclick="mostra(8);" style=" background:url('comunica.png') no-repeat center; background-size:150px;">
     	<span class="textbox">
         COMUNICAÇÃO
        </span>    
     </div>
    <div id="painel" style="display:none;"><br />
    <div height="width=50%" style="opacity:0.2;" id="logopainel"></div><br />
    <p id="txtpainel" style="width:70%; margin:0 auto; text-align:justify; font-family:Tahoma, Geneva, sans-serif; font-size:21px; margin-top:15px; color:#333;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><br /><br /><br />
    <p style="display:inline-block; margin-right:100px; text-align:center; text-decoration:underline; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:18px;" onclick="mostralista('s');" class="categorias"><!-- letras iniciais identificam área para ser passada para func js -->
        	SERVIÇOS
    </p>
    <p style="display:inline-block; margin-right:100px; text-align:center; font-size:10px;">
        	•
    </p>
    <p style="display:inline-block; margin-right:100px;text-decoration:underline;  text-align:center; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:18px;" onclick="mostralista(e);" class="categorias">
        	EVENTOS
    </p>
    <p style="display:inline-block; margin-right:100px; text-align:center; font-size:10px;">
        	•
    </p>
    <p style="display:inline-block; margin-right:100px;text-decoration:underline;  text-align:center; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:18px;" onclick="mostralista(c);" class="categorias">
        	CURSOS
    </p>
    <p style="display:inline-block; margin-right:100px; text-align:center; font-size:10px;">
        	•
    </p>
    <p style="display:inline-block; text-align:center; text-decoration:underline; margin-right:100PX; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:18px;" onclick="mostralista(p);" class="categorias">
        	PROJETOS
    </p>
    <p style="display:inline-block; margin-right:100px; text-align:center; font-size:10px;">
        	•
    </p>
    <p style="display:inline-block; text-align:center; text-decoration:underline; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:18px;" onclick="mostralista(p);" class="categorias">
        	REGISTRAR<br />PROGRAMA
    </p>
        
</div>
    <div id="lista" style="display:none;">
    	<p style="text-align:left; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:24px; cursor:pointer; color:#333;" onclick="mostrafinal('analises');" class="lista">
        	<img src="chev.png" width="24px;" style="float:none;" />Análises clínicas
        </p>
    	<p style="text-align:left;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:24px; cursor:pointer; color:#333;" class="lista">
        	<img src="chev.png" width="24px;" />Atendimento psicológico
        </p>
    </div>
    
    <div id="resultado" style="display:none;">
        <div id="logo" style="float:left"></div>
            <div>
                <p style="font-family:'Century Gothic', Calibri, Geneva, sans-serif; font-size:34px; display:inline-block; float:left; margin-top:30px; margin-bottom:0px;">Laboratório de Análises Clínicas - LACES
                </p><br /><br /><br /><br />
                <p style="font-family:'Century Gothic', Calibri, Geneva, sans-serif; font-size:20px; color:#999; float:left;">
                	Instituto de Ciências Biológicas - UFG
                </p>
            </div>
        <div id="detalhes" style="margin-top:128px;font-family:'Century Gothic', Tahoma, Geneva, sans-serif;">
        	<h2 style="text-align:left; margin-left:20px;">Descrição</h2>
			<p style="text-align:justify; margin-left:30px; margin-right:30px;">Prestar serviço de análises clínicas para a comunidade interna e externa da Universidade Federal de Goiás por meio de convênios com o Sistema Único de Saúde (SUS), outros que forem firmados ou prestação do serviço de forma particular de baixo custo . Oferecer exames laboratoriais nas áreas de hematologia, bioquímica, imunologia, hormônios, parasitologia e uranálise com qualidade e de fácil acesso. Realizar prestação de serviços de análises laboratoriais à pesquisas, apoiando assim o desenvolvimento institucional. Aprimorar a formação profissional dos acadêmicos do curso de Biomedicina e de cursos relacionados.</p>
            <p id="voltartela" style="float:right; margin-top:-340px; margin-right:10px; cursor:pointer; vertical-align:middle; font-family:Arial; font-size:16px;"><img src="voltar.png" width="32" class="voltar" onclick="esconderes();" /> </p>	
               <div>
             <h2 style="text-align:left; margin-left:20px;">Informações</h2>
                <p style="text-align:left; margin-left:30px;">Localização: Chácaras Califórnia, Goiânia - GO, 74045-155</p>
                <p style="text-align:left; margin-left:30px;">Telefone: (62) 3521-1867</p>
             <h2 style="text-align:left; margin-left:20px;">Acesse nossas redes sociais</h2>
                <p style="text-align:left; margin-left:30px;" style="cursor:pointer;"><img src="ig.png" /><img src="fb.png" /><img src="tt.png" />              		    
                <p style="float:right; margin-top:-60px; margin-right:10px;">Compartilhe<br /> <img src="wpp.png" /></p>
</p>
               <p style="bottom:0; position:relative; font-size:12px; color:#999;">UFG - Pública, Gratuita e de Qualidade</p>
    </div>
        </div>
    </div>
</div>

</body>
<script type="text/javascript">//scripts para animacao jquery
$('.box').click(function() {
    $('html,body').animate({
        scrollTop: $("#painel").offset().top},
        'slow');
});
$('.categorias').click(function() {
    $('html,body').animate({
        scrollTop: $("#lista").offset().top},
        'slow');
});
$('.lista').click(function() {
    $('html,body').animate({
        scrollTop: $("#resultado").offset().top},
        'slow');
});
$('.voltar').click(function() {
    $('html,body').animate({
        scrollTop: $("#header").offset().top},
        'slow');
});
</script>
<script type="text/javascript">
function mostra(e){
	document.getElementById('painel').style.display = "block";
	
	if(e==1){//1 = saude
		document.getElementById('painel').style.backgroundImage = "linear-gradient(to top, #CEE3F6, #F4F4F4)";		document.getElementById('logopainel').innerHTML="____________________________________________";
		document.getElementById('txtpainel').innerHTML="Você sabia que a UFG oferece uma ampla gama de atividades, serviços, projetos e eventos na área da Saúde? <br> Escolha uma das categorias a baixo para saber mais:";
		}	
	if(e==2){//2 - direitos humanos
		document.getElementById('painel').style.backgroundColor = "#E6F8E0";
		document.getElementById('logopainel').src="dhj.png";
		document.getElementById('txtpainel').innerHTML="Você sabia que a UFG oferece atividades, serviços, projetos e eventos na área dos Direitos Humanos e Justiça? <br> Escolha uma das categorias a baixo para saber mais:";
		}
		//continuar com ifs até completar as 8 frentes de extensão
	document.getElementsByClassName('categorias').item().style.animation = "1s ease-out 0s 1 slideInFromLeft"; //animacao das categorias slide right
}
function mostralista(cat){
	/* aqui será feito um request com php
	utilizando o valor cat repassado pela funcao
	o valor cat será correspondido por uma das 4 
	categorias de extensao (servico, projeto, evento...)
	que estarao presente no banco de dados e indentificarão 
	a linha correspondente ao evento
	*/
	document.getElementById('lista').style.display="block"; //mostra div oculta
	document.getElementsByClassName('lista').item().style.animation = "1s ease-out 0s 1 slideInFromLeft"; //adiciona animacao
			}
function mostrafinal(cat){ //mostra a div final que contem as informacoes
		if(cat == 'analises'){//essa func estará em um laco de repeticao php para a listagem dos eventos, projetos...
			document.getElementById('resultado').style.display = "inline-block";
		}
	}
function esconderes(){// animacao do botao voltar
	setTimeout(function(){
document.getElementById('painel').style.display="none";
	document.getElementById('lista').style.display="none";
	document.getElementById('resultado').style.display="none";
}, 500);
}
</script>
</html>