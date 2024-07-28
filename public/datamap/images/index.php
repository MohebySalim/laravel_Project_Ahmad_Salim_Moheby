
<?php 
include_once('connection.php');
$query="select * from ajsc_dm";
$result=mysql_query($query);
?>
<!DOCTYPE html>
<html>
   <head>
      <title>DataMapping</title>
      <meta name="description" content="" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   </head>
   <body style="font-family: 'Rajdhani', sans-serif;">

      <div class="top-banner">
         <h1>AJSC DataMapping</h1>
      </div>
       <div class="svg-wrapper">
     <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
       <rect class="shape" height="60" width="320" />
     </svg>
     <div class="text"><a href="#" target="blank" style="font-size: 25px;font-weight: bold;">Details</a></div>
   </div>

      <div class="map">
         
         <svg version="1.1" id="svg-map" x="0px" y="0px" width="700px" height="540px">
            <g>
               <a xlink:href="#paktya" href="kabul.html" class="pak" name="paktya" code="17">
                  <path class="pt" stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M456.99,266.63L439.77,266.33L413.9,291.86L402.4,291.87L402.22,304.65L411.23,304.41L413.61,318.55L423.52,311.51L432.91,313.29L441.76,295.26L461.79,284.34L454.25,272.67L457.37,267.17L456.99,266.63z"></path>
                  <text transform="matrix(1 0 0 1 410.0137 300.3208)" fill="#FFFFFF">PAKTYA</text>
               </a>
               <a xlink:href="#wardak" href="kabul.html" class="war" name="wardak" code="29">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M406.78,232.71L383.11,232.34L378.63,222.2L363.67,234.26L330.91,231.96L328.58,243.98L342.99,252.99L337.33,261.14L367.55,257.61L371.96,271.82L387.09,287.11L399.46,281.54L411.94,248.79L406.78,232.71z"></path>
                  <text transform="matrix(1 0 0 1 354.7324 250.1221)" fill="#FFFFFF">WARDAK</text>
               </a>
               <a xlink:href="#samangan" href="kabul.html" class="sam" name="samangan" code="28">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M374.09,115.07L335.12,116.17L332.65,138.08L319.67,146.95L322.22,154.77L311.78,167.66L317.01,176.95L308.37,188.11L369.21,182.99L390.7,141.62L374.97,122.83L376.54,116.4L374.09,115.07z"></path>
                  <text transform="matrix(1 0 0 1 332.9121 150.6689)" fill="#FFFFFF">SAMANGAN</text>
               </a>
               <a xlink:href="#parwan" href="kabul.html" class="par" name="parwan" code="26">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M426.23,187.09L392.85,206.6L373.85,209.82L378.63,222.2L383.11,232.34L406.78,232.71L412.61,216.58L427.96,220.31L435.19,234.54L442.76,231.12L440.9,215.7L427.88,209.57L427.19,200.8L426.23,187.09z"></path>
                  <text transform="matrix(1 0 0 1 380.3984 216.8003)" fill="#FFFFFF">PARWAN</text>
               </a>
               <a xlink:href="#logar" href="kabul.html" class="log" name="logar" code="27">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M437.02,259.95L427.1,247.91L411.94,248.79L399.46,281.54L402.4,291.87L413.9,291.86L439.77,266.33L456.99,266.63L449.11,254.6L437.02,259.95z"></path>
                  <text transform="matrix(1 0 0 1 405.7891 273.895)" fill="#FFFFFF">LOGAR</text>
               </a>
               <a xlink:href="#laghman" href="kabul.html" class="lagh" name="laghman" code="24">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M489.83,210.74L475.11,214.17L460.61,196.4L452.1,205.6L456.97,219.05L452.84,245.15L479.11,240.69L491.83,222.21L489.83,210.74z"></path>
                  <text transform="matrix(1 0 0 1 457.525 225.9009)" fill="#FFFFFF">LAGHMAN</text>
               </a>
               <a xlink:href="#panjsher" href="kabul.html" class="pan" name="panjsher" code="22">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M475.23,159.76L460.07,162.18L449.78,178.23L426.23,187.09L427.19,200.8L452.1,205.6L460.61,196.4L458.16,189.26L473.18,170.52L475.23,159.76z"></path>
                  <text transform="matrix(1 0 0 1 427.8379 194.0347)" fill="#FFFFFF">PANJSHER</text>
               </a>
               <a xlink:href="#kapisa" href="kabul.html" class="kap" name="kapisa" code="22">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M452.1,205.6L427.19,200.8L427.88,209.57L440.9,215.7L442.76,231.12L456.97,219.05L452.1,205.6z"></path>
                  <text transform="matrix(1 0 0 1 433.127 213.1045)" fill="#FFFFFF">KAPISA</text>
               </a>
               <a xlink:href="#kabul" href="kabul.html" class="kab" name="kabul" code="22">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M442.76,231.12L435.19,234.54L427.96,220.31L412.61,216.58L406.78,232.71L411.94,248.79L427.1,247.91L437.02,259.95L452.84,245.15L456.97,219.05L442.76,231.12z"></path>
                  <text transform="matrix(1 0 0 1 420.2754 243.7036)" fill="#FFFFFF">KABUL</text>
               </a>
               <a xlink:href="#baghlan" href="kabul.html" class="bagh" name="baghlan" code="16">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M424.15,132.94L399.99,118.63L376.54,116.4L374.97,122.83L390.7,141.62L369.21,182.99L365.67,206.57L373.85,209.82L392.85,206.6L426.23,187.09L449.78,178.23L460.07,162.18L446.49,129.74L430.16,136.99L424.15,132.94z"></path>
                  <text transform="matrix(1 0 0 1 395.9023 162.6099)" fill="#FFFFFF">BAGHLAN</text>
               </a>
               <a xlink:href="#takhar" href="kabul.html" class="takh" name="takhar" code="15">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M462.16,56.8L438.12,55.11L428.41,83.32L420.58,121.47L424.15,132.94L430.16,136.99L446.49,129.74L460.07,162.18L475.23,159.76L484.37,152.55L484.89,133.75L463.83,122.99L462.28,95.14L467.98,87.84L462.16,56.8z"></path>
                  <text transform="matrix(1 0 0 1 427.7725 112.5137)" fill="#FFFFFF">TAKHAR</text>
               </a>
               <a xlink:href="#nangarhar" href="kabul.html" class="nang" name="nangarhar" code="14">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M509.68,236.66L497.96,238.09L491.83,222.21L479.11,240.69L452.84,245.15L437.02,259.95L449.11,254.6L456.99,266.63L457.37,267.17L487.29,272.85L512.75,266.81L516.62,249.78L509.68,236.66z"></path>
                  <text transform="matrix(1 0 0 1 457.2939 260.3862)" fill="#FFFFFF">NANGARHAR</text>
               </a>
               <a xlink:href="#kunduz" href="kabul.html" class="kun" name="kunduz" code="13">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M428.41,83.32L408,69.83L366.12,94.95L374.09,115.07L376.54,116.4L399.99,118.63L424.15,132.94L420.58,121.47L428.41,83.32z"></path>
                  <text transform="matrix(1 0 0 1 380.1406 105.0591)" fill="#FFFFFF">KUNDUZ</text>
               </a>
               <a xlink:href="#kunar" href="kabul.html" class="kunar" name="kunar" code="12">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M509.68,236.66L541.02,200.3L539.28,182.81L520.6,192.59L515.88,204.26L493.6,202.59L489.83,210.74L491.83,222.21L497.96,238.09L509.68,236.66z"></path>
                  <text transform="matrix(1 0 0 1 492.7017 220.9355)" fill="#FFFFFF">KUNAR</text>
               </a>
               <a xlink:href="#nuristan" href="kabul.html" class="nur" name="nuristan" code="11">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M539.28,182.81L531.4,160.15L518.73,148.94L503.91,181.62L495.31,178.47L488.33,183.88L485.23,170.72L473.18,170.52L458.16,189.26L460.61,196.4L475.11,214.17L489.83,210.74L493.6,202.59L515.88,204.26L520.6,192.59L539.28,182.81z"></path>
                  <text transform="matrix(1 0 0 1 470.1299 195.3193)" fill="#FFFFFF">NURISTAN</text>
               </a>
               <a xlink:href="#badakhshan" href="kabul.html" class="bad" name="badakhshan" code="51">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M509.22,0L494.22,4.23L470.31,32.58L475.31,49.2L462.16,56.8L467.98,87.84L462.28,95.14L463.83,122.99L484.89,133.75L484.37,152.55L475.23,159.76L473.18,170.52L485.23,170.72L488.33,183.88L495.31,178.47L503.91,181.62L518.73,148.94L540.1,123.24L548.46,126.94L569.37,107.01L616.83,97.89L657.76,101.61L682.12,92.72L673.81,81.44L679.69,76.68L699.34,76.36L688.09,66.42L671.36,64.41L641.94,77.22L636.51,74.49L644.09,64.32L621.9,62.09L597.37,77.02L590.92,88.67L542.17,109.4L531.4,86.35L539.49,35.52L523.01,33.79L527.86,13.76L509.22,0z"></path>
                  <text transform="matrix(1 0 0 1 473.0244 100.4175)" fill="#FFFFFF">BADAKHSHAN</text>
               </a>
               <a xlink:href="#paktika" href="kabul.html" class="paktika" name="paktika" code="50">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M432.91,313.29L423.52,311.51L413.61,318.55L411.23,304.41L402.22,304.65L376.24,340.6L367.09,343.61L360.46,338.03L356.13,344.38L367.69,356.13L367.41,379.35L369.69,398.75L372.64,394.94L389.08,400.68L385.24,397.39L390.51,395.11L403.92,407.68L416.92,402.25L428.23,388.02L424.74,358.45L434.11,347.37L436.64,326.8L430.19,324.95L432.91,313.29z"></path>
                  <text transform="matrix(1 0 0 1 378.2939 360.7236)" fill="#FFFFFF">PAKTIKA</text>
               </a>
               <a xlink:href="#khost" href="kabul.html" class="kh" name="khost" code="52">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M436.64,326.8L462.29,319.82L476.25,308.97L467.69,285.83L461.79,284.34L441.76,295.26L432.91,313.29L430.19,324.95L436.64,326.8z"></path>
                  <text transform="matrix(1 0 0 1 436.9111 314.2139)" fill="#FFFFFF">KHOST</text>
               </a>
               <a xlink:href="#ghazni" href="kabul.html" class="ghaz" name="ghazni" code="41">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M399.46,281.54L387.09,287.11L371.96,271.82L367.55,257.61L337.33,261.14L333.23,267.12L334.8,277.45L308.85,293.77L308.11,311.17L316.16,313.63L311.83,325.6L316.95,331.67L321.03,323.78L330.67,330.51L337.03,326.93L336.12,339.08L354.28,363.28L347.09,370.54L367.41,379.35L367.69,356.13L356.13,344.38L360.46,338.03L367.09,343.61L376.24,340.6L402.22,304.65L402.4,291.87L399.46,281.54z"></path>
                  <text transform="matrix(1 0 0 1 335.4453 310.1045)" fill="#FFFFFF">GHAZNI</text>
               </a>
               <a xlink:href="#zabul" href="kabul.html" class="zab" name="zabul" code="42">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M367.41,379.35L347.09,370.54L354.28,363.28L336.12,339.08L337.03,326.93L330.67,330.51L321.03,323.78L316.95,331.67L299.56,346.08L297.23,341.1L288.16,346.29L283.72,356.78L294.06,355.88L283.67,373.28L283.87,388.98L276.71,394.41L283,402.42L301.49,392.02L314.18,400.35L325.55,398.65L336.61,410.88L352.7,410.99L369.69,398.75L367.41,379.35z"></path>
                  <text transform="matrix(1 0 0 1 305.9111 374.7646)" fill="#FFFFFF">ZABUL</text>
               </a>
               <a xlink:href="#kandahar" href="kabul.html" class="kan" name="kandahar" code="43">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M283.72,356.78L254.13,359.76L254.05,352.37L248.35,352L240.56,369.12L230.77,366.42L224.68,381.5L216.74,382.45L210.24,394.2L195.07,522.24L221.12,523.91L277.37,507.43L284.4,500.64L278.52,494.97L286.09,445.48L311.83,424.57L333.2,430.12L353.5,422.95L343.38,412.82L352.7,410.99L336.61,410.88L325.55,398.65L314.18,400.35L301.49,392.02L283,402.42L276.71,394.41L283.87,388.98L283.67,373.28L294.06,355.88L283.72,356.78z"></path>
                  <text transform="matrix(1 0 0 1 221.0313 434.4658)" fill="#FFFFFF">KANDAHAR</text>
               </a>
               <a xlink:href="#daykundi" href="kabul.html" class="day" name="daykundi" code="35">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M291.51,246.43L244.67,249.03L244.61,270.83L238.73,277.09L247.35,292.34L229.98,306.41L236.25,322.1L270.29,323.89L283.16,309.71L308.11,311.17L308.85,293.77L334.8,277.45L333.23,267.12L299.15,270.76L292.91,265.69L291.51,246.43z"></path>
                  <text transform="matrix(1 0 0 1 253.6816 290.3193)" fill="#FFFFFF">DAYKUNDI</text>
               </a>
               <a xlink:href="#uruzgan" href="kabul.html" class="urz" name="uruzgan" code="31">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M308.11,311.17L283.16,309.71L270.29,323.89L236.25,322.1L228.3,333.46L230.77,366.42L240.56,369.12L248.35,352L254.05,352.37L254.13,359.76L283.72,356.78L288.16,346.29L297.23,341.1L299.56,346.08L316.95,331.67L311.83,325.6L316.16,313.63L308.11,311.17z"></path>
                  <text transform="matrix(1 0 0 1 248.4063 342.4561)" fill="#FFFFFF">URUZGAN</text>
               </a>
               <a xlink:href="#nimroz" href="kabul.html" class="nim" name="nimroz" code="33">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M148.03,373.52L129.95,370.52L123.94,383.95L109.86,388.99L99.96,380.88L72.78,383.78L54.68,419.84L61.62,424.75L64.19,450.55L17.72,506.15L103.03,530.72L111.03,486.74L126.79,469.07L129.25,445.5L138.95,434.8L148.03,373.52z"></path>
                  <text transform="matrix(1 0 0 1 75.4648 454.6807)" fill="#FFFFFF">NIMROZ</text>
               </a>
               <a xlink:href="#hilmand" href="kabul.html" class="hil" name="hilmand" code="32">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M175.01,532.47L195.07,522.24L210.24,394.2L216.74,382.45L224.68,381.5L230.77,366.42L228.3,333.46L236.25,322.1L229.98,306.41L206.02,314.26L184.64,349.31L171.52,352.18L171.53,359.47L148.03,373.52L138.95,434.8L129.25,445.5L126.79,469.07L111.03,486.74L103.03,530.72L149.9,526.29L175.01,532.47z"></path>
                  <text transform="matrix(1 0 0 1 147.3047 440.4971)" fill="#FFFFFF">HILMAND</text>
               </a>
               <a xlink:href="#farah" href="kabul.html" class="far" name="farah" code="53">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M206.02,314.26L197.57,308.73L190.21,319.3L181.96,318.25L168.83,297.47L149.05,307.51L129.12,308.94L123.02,318.54L98.47,324.11L90.72,336.55L75.98,339.98L73.57,333.38L66.79,338.04L57.6,332.51L66.19,318.43L61.9,311.71L66.38,299.81L21.38,297.71L3.99,319.5L17.03,370.73L16.62,413.82L54.68,419.84L72.78,383.78L99.96,380.88L109.86,388.99L123.94,383.95L129.95,370.52L148.03,373.52L171.53,359.47L171.52,352.18L184.64,349.31L206.02,314.26z"></path>
                  <text transform="matrix(1 0 0 1 72.4141 364.2139)" fill="#FFFFFF">FARAH</text>
               </a>
               <a xlink:href="#sar-e-pul" href="kabul.html" class="sar" name="sar-e-pul" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M311.78,167.66L292.28,170.18L298.43,158.24L297.1,140.97L290.26,137.32L300.88,118.16L293.46,115.41L244.14,130.87L244.93,152.11L252.6,150.76L258.98,160.58L242.65,171.97L241.26,195.32L250.52,194.39L269.66,206.67L272.97,223.14L285.52,215.47L285.23,200.22L300.34,198.36L308.37,188.11L317.01,176.95L311.78,167.66z"></path>
                  <text transform="matrix(1 0 0 1 255.2129 185.9893)" fill="#FFFFFF">SAR-E-PUL</text>
               </a>
               <a xlink:href="#ghor" href="kabul.html" class="ghor" name="ghor" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M285.52,215.47L272.97,223.14L269.66,206.67L250.52,194.39L241.26,195.32L206.26,197.75L219.32,208.86L220.53,221.53L193.94,229.81L194.2,240.36L180.43,241.69L176.56,256.05L146.24,253.53L141.13,264.93L150.6,280.79L145.47,289.14L125.93,296.53L129.12,308.94L149.05,307.51L168.83,297.47L181.96,318.25L190.21,319.3L197.57,308.73L206.02,314.26L229.98,306.41L247.35,292.34L238.73,277.09L244.61,270.83L244.67,249.03L291.51,246.43L303.58,240.66L305.38,232.32L285.52,215.47z"></path>
                  <text transform="matrix(1 0 0 1 190.2129 268.9893)" fill="#FFFFFF">GHOR</text>
               </a>
               <a xlink:href="#jawzjan" href="kabul.html" class="jaw" name="jawzjan" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M280.05,68.52L256.3,55.15L243.03,75.7L235.44,93.41L242.88,127.6L231.26,129.99L224.32,152.32L239.5,156.21L252.6,150.76L244.93,152.11L244.14,130.87L293.46,115.41L288.13,106.24L295.42,103.22L292.31,83.59L280.05,68.52z"></path>
                  <text transform="matrix(1 0 0 1 242.2129 95.9893)" fill="#FFFFFF">JAWZJAN</text>
               </a>
               <a xlink:href="#faryab" href="kabul.html" class="far" name="faryab" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M252.6,150.76L239.5,156.21L224.32,152.32L231.26,129.99L242.88,127.6L235.44,93.41L243.03,75.7L208.62,83.25L195,133.27L173.61,144.47L173.02,150.86L166.29,148.88L170.96,180.58L191.01,185.58L191.04,196.34L206.26,197.75L241.26,195.32L242.65,171.97L258.98,160.58L252.6,150.76z"></path>
                  <text transform="matrix(1 0 0 1 188.2129 158.9893)" fill="#FFFFFF">FARYAB</text>
               </a>
               <a xlink:href="#balkh" href="kabul.html" class="bal" name="balkh" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M366.12,94.95L352.62,76.46L340.81,73.26L328.97,79.16L316.68,67.01L280.05,68.52L292.31,83.59L295.42,103.22L288.13,106.24L293.46,115.41L300.88,118.16L290.26,137.32L297.1,140.97L298.43,158.24L292.28,170.18L311.78,167.66L322.22,154.77L319.67,146.95L332.65,138.08L335.12,116.17L374.09,115.07L366.12,94.95z"></path>
                  <text transform="matrix(1 0 0 1 310.2129 100.9893)" fill="#FFFFFF">BALKH</text>
               </a>
               <a xlink:href="#bamyan" href="kabul.html" class="bam" name="bamyan" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M369.21,182.99L308.37,188.11L300.34,198.36L285.23,200.22L285.52,215.47L305.38,232.32L303.58,240.66L291.51,246.43L292.91,265.69L299.15,270.76L333.23,267.12L337.33,261.14L342.99,252.99L328.58,243.98L330.91,231.96L363.67,234.26L378.63,222.2L373.85,209.82L365.67,206.57L369.21,182.99z"></path>
                  <text transform="matrix(1 0 0 1 305.2129 225.9893)" fill="#FFFFFF">BAMYAN</text>
               </a>
               <a xlink:href="#herat" href="kabul.html" class="her" name="herat" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M113.73,190.95L103.12,197.37L94.74,193.74L87.68,202.05L74.15,184.32L54.61,184.81L38.35,173.61L28.44,221.35L10.7,238.95L19.95,250.56L7.98,251.29L0.66,261.12L1.58,290.38L21.38,297.71L66.38,299.81L61.9,311.71L66.19,318.43L57.6,332.51L66.79,338.04L73.57,333.38L75.98,339.98L90.72,336.55L98.47,324.11L123.02,318.54L129.12,308.94L125.93,296.53L145.47,289.14L150.6,280.79L141.13,264.93L146.24,253.53L176.56,256.05L180.43,241.69L194.2,240.36L193.94,229.81L160.42,239.36L123.97,231.34L105.57,217.97L113.73,190.95z"></path>
                  <text transform="matrix(1 0 0 1 65.2129 268.9893)" fill="#FFFFFF">HIRAT</text>
               </a>
               <a xlink:href="#badghis" href="kabul.html" class="badghis" name="badghis" code="25">
                  <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M206.26,197.75L191.04,196.34L191.01,185.58L170.96,180.58L166.29,148.88L127.36,159.39L132.71,168.79L126.03,173.24L126.2,184.43L113.73,190.95L105.57,217.97L123.97,231.34L160.42,239.36L193.94,229.81L220.53,221.53L219.32,208.86L206.26,197.75z"></path>
                  <text transform="matrix(1 0 0 1 135.2129 200.9893)" fill="#FFFFFF">BADGHIS</text>
               </a>
            </g>
         </svg>
        
      </div>


   


      <div class="cont" style="position: relative;top: 100px;">
         <h1>TYPE OF VIOLENCE</h1>
         <div class="sel tp">

   <label for="year">
    <select id="year" name="select">
      <option value="0">Select Year</option>
      <option value="1">All</option>
      <option value="2">2013</option>
      <option value="3">2014</option>
      <option value="4">2015</option>
      <option value="5">2016</option>
      <option value="6">2017</option>
      <option value="7">2018</option>
      <option value="8">2019</option>
  
    </select>
  </label>

  </div>
         <ul class="graphs stats-container centered biggie">
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="63" data-max-value="100" data-label="KILLED" data-title="TOTAL CASES: 134" data-dates="2013 - Present" style="position: relative; width: 150px; height: 100%;">
            </li>
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="32" data-max-value="100" data-label="INJURED" data-title="TOTAL CASES: 432" data-dates="2013 - Present" style="width: 150px; height: 100%;"></li>
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="15" data-max-value="100" data-label="BEATEN" data-title="TOTAL CASES: 122" data-dates="2013 - Present" style="width: 150px; height: 100%;"></li>
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="25" data-max-value="100" data-label="THREATENDED" data-title="TOTAL CASES: 134" data-dates="2013 - Present" style="width: 150px; height: 100%;">
            </li>
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="23" data-max-value="100" data-label="MISBEHAVIOR" data-title="TOTAL CASES: 432" data-dates="2013 - Present" style="width: 150px; height: 100%;"></li>
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="34" data-max-value="100" data-label="DISMISSAL OF DUTY" data-title="TOTAL CASES: 122" data-dates="2013 - Present" style="width: 150px; height: 100%;"></li>
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="25" data-max-value="100" data-label="ARREST" data-title="TOTAL CASES: 134" data-dates="2013 - Present" style="width: 150px; height: 100%;">
            </li>
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" data-initial-value="45" data-max-value="100" data-label="KIDNAPPED" data-title="TOTAL CASES: 432" data-dates="2013 - Present" style="width: 150px; height: 100%;"></li>
         </ul>
         <script  src="js/script.js"></script>


         
         <main style="position: relative;width: 100%;">

            <h1 style="position: relative;width: 100%;">Perpetrators</h1>
            <div style="width: 50%;position: relative; padding: 0 auto;margin: 0 auto;">
               <canvas id="polarChart"></canvas>
            </div>
            </main>

            <div class='app-layout'>
  <div class='box gov'><span>Government Officials</span><div class="dwn"><img src="images/media.png" style="width: 20px;height: 30px;"><p>Killed:32<br/>Injured: 45<br/>Insulted: 65<br/></p></div></div>
  <div class='box tal'><span>Taliban</span><br/><div class="dwn"><img src="images/taliban.png" style="width: 20px;height: 30px;"><p>Killed:32<br/>Injured: 45<br/>Insulted: 65<br/></p></div></div>
  <div class='box unk'><span>Unknown Groups</span><br/><div class="dwn"><img src="images/un.png" style="width: 20px;height: 30px;"><p>Killed:32<br/>Injured: 45<br/>Insulted: 65<br/></p></div></div>
  <div class='box med'><span>Media Officials</span><br/><div class="dwn"><img src="images/med.png" style="width: 30px;height: 30px;"><p>Killed:32<br/>Injured: 45<br/>Insulted: 65<br/></p></div></div>
  <div class='box pro'><span>Protestors</span><br/><div class="dwn"><img src="images/pr.png" style="width: 30px;height: 30px;"><p>Killed:32<br/>Injured: 45<br/>Insulted: 65<br/></p></div></div>
  <div class='box loc'><span>Local</span><br/><div class="dwn"><img src="images/local.png" style="width: 20px;height: 30px;"><p>Killed:32<br/>Injured: 45<br/>Insulted: 65<br/></p></div></div>
  <div class='box isis'><span>ISIS</span><br/><div class="dwn"><img src="images/isis.png" style="width: 30px;height: 30px;"><p>Killed:32<br/>Injured: 45<br/>Insulted: 65<br/></p></div></div>
</div>



          </div>

    
  



         <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
         <script  src="js/script2.js"></script>


  <div class="table">
  <h1 style="color: #fff;">Result Table</h1>

  <div class="sel" style="position: relative;width: 90%;float: right;">
   <label for="year">

    <select id="year" name="select">
      <option value="0">Select Year</option>
      <option value="1">All</option>
      <option value="2">2013</option>
      <option value="3">2014</option>
      <option value="4">2015</option>
      <option value="5">2016</option>
      <option value="3">2017</option>
      <option value="4">2018</option>
      <option value="4">2019</option>
  
    </select>
  </label>

  <label for="year">
    <select id="year" name="select">
      <option value="0">Choose Type of Violence</option>
      <option value="1">All</option>
      <option value="2">killed</option>
      <option value="3">Injured</option>
      <option value="4">Beaten</option>
      <option value="5">Insulted</option>
      <option value="6">Misbehavior</option>
      <option value="7">Dismissal of Duty</option>
      <option value="8">Kidnapped</option>
      <option value="9">Threatended</option>
      
    </select>
  </label>

  <label for="year">
    <select id="year" name="select">
      <option value="0">Choose Perpetrators Type</option>
      <option value="1">All</option>
      <option value="2">Government Officials</option>
      <option value="3">Media Officials</option>
      <option value="4">Locals</option>
      <option value="5">Protestors</option>
      <option value="6">Taliban</option>
      <option value="7">ISIS</option>
      <option value="8">Unknown Groups</option>
    </select>
  </label>
  </div>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Student Record</h2></th>
        </tr>
        <t>
            <th> ID </th>
            <th> Name </th>
            <th> Email </th>
            <th> Country </th>
        </t>
    <?php 
        while($rows=mysql_fetch_assoc($result))
        {
    ?>        
            <tr>
                <td><?php echo $rows['Zone']; ?></td>
                <td><?php echo $rows['Occupation']; ?></td>
                <td><?php echo $rows['type of Violence']; ?></td>
                <td><?php echo $rows['provence']; ?></td>
            </tr>
    <?php     
        }
    ?>    
    </table>
  
</div>
  
<div class="ftr">
  <h2>@AJSC 2019</h2>
</div>
    <script  src="js/script3.js"></script>

   </body>
</html>