<!DOCTYPE html>
<html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    *{ box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; scroll-behavior: smooth;}
    html, body { height: 100%; overflow: hidden;}

    body {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 0;
        font-family: Poppins;
        background: #000;

        font-size: calc(var(--_size) * 0.022);
        --_factor: min(1000px, 100vh);
        --_size: min(var(--_factor), 100vw);
    }
    svg.filters { height:0; width: 0; position: absolute; z-index:-1; }
    .header-text {
        color: #c8c2bd;
        font-size: 3em;
        text-align: center;
        line-height: 1.4;
        font-weight: 600;
        letter-spacing: -0.009em;
    }
    .glow-filter{
        position: relative;
        display: inline-block;
        scale: 1;

        animation: onloadscale 1s ease-out forwards;
    }
    .glow-filter::before{
        content: attr(data-text);
        position: absolute;
        pointer-events: none;
        color:  #fffaf6;
        background: linear-gradient(0deg, #dfe5ee 0%, #fffaf6 50%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        filter: url(#glow-4);
        -moz-filter: url(#glow-4);
        -webkit-filter: url(#glow-4);

        opacity: 0;
        animation: onloadopacity 1s ease-out forwards;
    }
    @keyframes onloadscale {
        24% { scale: 1; }
        100% { scale: 1.02; }
    }
    @keyframes onloadopacity {
        24% { opacity: 0; }
        100% { opacity: 1; }
    }

    p {
        position: absolute;
        color:  #86868b;
        font-weight: 600;
        background: linear-gradient(0deg,#86868b 0%, #bdc2c9 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        top: 0; bottom: 0; margin: auto;
        height: fit-content;
        translate: 0 12em;
        max-width: 28em;
        text-align: center;
    }
    p span {
        position: relative;
        display: inline-block;
        -webkit-text-fill-color:#e7dfd6;
        font-weight: 1000;
    }

    .bg {
        width: 100%; 
        height: 100%;
        
        position: absolute;
    }
    .bg > div {
        position: absolute;
        scale: 1.2;
        opacity: 0.5; /* Slightly lower opacity for a more subtle effect */
    }
    .bg > div:nth-child(1) {
        width: 100%;
        height: 100%;
        border-radius: 100em;
        box-shadow: 
        inset 0 0 4em 3em rgba(0, 0, 0, 0.1), /* Subtle black glow */
        inset 0 0 2em 0.4em rgba(255, 255, 255, 0.1), /* Very light white glow */
        0 0 0.1em 0.1em rgba(0, 0, 0, 0.1), /* Soft shadow */
        0 0 1em 0.2em rgba(0, 0, 0, 0.2); /* Slightly darker outer glow */
        translate: 0 -100%; /* Changed to start higher */
        animation: onloadbgt 5s ease-in-out forwards; /* Increased duration to 5s */
    }
    .bg > div:nth-child(2) {
        width: 100%;
        height: 100%;
        border-radius: 100em;
        box-shadow: 
        inset 0 0 4em 3em rgba(0, 0, 0, 0.1), /* Consistent subtle glow */
        inset 0 0 2em 0.4em rgba(255, 255, 255, 0.1), /* Very light white glow */
        0 0 0.1em 0.1em rgba(0, 0, 0, 0.1), /* Soft shadow */
        0 0 1em 0.2em rgba(0, 0, 0, 0.2); /* Slightly darker outer glow */
        translate: 0 100%; /* Changed to start lower */
        animation: onloadbgb 5s ease-in-out forwards; /* Increased duration to 5s */
    }
    @keyframes onloadbgt {
        0% { translate: 0 -100%; opacity: 0.3; }
        100% { translate: 0 -64%; opacity: 0.7; } /* Slightly higher opacity for the end state */
    }
    @keyframes onloadbgb {
        0% { translate: 0 100%; opacity: 0.3; }
        100% { translate: 0 64%; opacity: 0.7; } /* Slightly higher opacity for the end state */
    }

    a {
    display: inline-block; /* Allows scaling */
    text-decoration: none;
    color: inherit;
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
}

a:hover {
    transform: scale(1.05); /* Subtle scale effect */
    color: #3498db; /* Changes color on hover */
}

</style>

</head>
<body>

  <!-- design and filter inspired from apple.com/iphone-16-pro/ -->
<div class="bg"><div></div><div></div></div>
<div class="header-text" aria-hidden="true">
    Truly open-source<br><span class="glow-filter" data-text="Otakuguard.">Otakuguard.</span>
</div>
<p>
scans vital elements like emails, passwords, and SSL certificates, helping you identify <span>potential vulnerabilities</span> and enhance your online security. Empower yourself with insights to safeguard your digital presence. <br><br><span><a href="main.php">Tap Here to Start your analysis today!</a></span> 
</p>
    

<svg class="filters" width='1440px' height='300px' viewBox='0 0 1440 300' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter id="glow-4" color-interpolation-filters="sRGB" x="-50%" y="-200%" width="200%" Height="500%">
            <feGaussianBlur in="SourceGraphic" data-target-blur="4" stdDeviation="4" result="blur4"/>
            <feGaussianBlur in="SourceGraphic" data-target-blur="19" stdDeviation="19" result="blur19"/>
            <feGaussianBlur in="SourceGraphic" data-target-blur="9" stdDeviation="9" result="blur9"/>
            <feGaussianBlur in="SourceGraphic" data-target-blur="30" stdDeviation="30" result="blur30"/>
            <feColorMatrix in="blur4" result="color-0-blur" type="matrix" values="1 0 0 0 0
                      0 0.9803921568627451 0 0 0
                      0 0 0.9647058823529412 0 0
                      0 0 0 0.8 0"/>
            <feOffset in="color-0-blur" result="layer-0-offsetted" dx="0" dy="0" data-target-offset-y="0"/>
            <feColorMatrix in="blur19" result="color-1-blur" type="matrix" values="0.8156862745098039 0 0 0 0
                      0 0.49411764705882355 0 0 0
                      0 0 0.2627450980392157 0 0
                      0 0 0 1 0"/>
            <feOffset in="color-1-blur" result="layer-1-offsetted" dx="0" dy="2" data-target-offset-y="2"/>
            <feColorMatrix in="blur9" result="color-2-blur" type="matrix" values="1 0 0 0 0
                      0 0.6666666666666666 0 0 0
                      0 0 0.36470588235294116 0 0
                      0 0 0 0.65 0"/>
            <feOffset in="color-2-blur" result="layer-2-offsetted" dx="0" dy="2" data-target-offset-y="2"/>
            <feColorMatrix in="blur30" result="color-3-blur" type="matrix" values="1 0 0 0 0
                      0 0.611764705882353 0 0 0
                      0 0 0.39215686274509803 0 0
                      0 0 0 1 0"/>
            <feOffset in="color-3-blur" result="layer-3-offsetted" dx="0" dy="2" data-target-offset-y="2"/>
            <feColorMatrix in="blur30" result="color-4-blur" type="matrix" values="0.4549019607843137 0 0 0 0
                      0 0.16470588235294117 0 0 0
                      0 0 0 0 0
                      0 0 0 1 0"/>
            <feOffset in="color-4-blur" result="layer-4-offsetted" dx="0" dy="16" data-target-offset-y="16"/>
            <feColorMatrix in="blur30" result="color-5-blur" type="matrix" values="0.4235294117647059 0 0 0 0
                      0 0.19607843137254902 0 0 0
                      0 0 0.11372549019607843 0 0
                      0 0 0 1 0"/>
            <feOffset in="color-5-blur" result="layer-5-offsetted" dx="0" dy="64" data-target-offset-y="64"/>
            <feColorMatrix in="blur30" result="color-6-blur" type="matrix" values="0.21176470588235294 0 0 0 0
                      0 0.10980392156862745 0 0 0
                      0 0 0.07450980392156863 0 0
                      0 0 0 1 0"/>
            <feOffset in="color-6-blur" result="layer-6-offsetted" dx="0" dy="64" data-target-offset-y="64"/>
            <feColorMatrix in="blur30" result="color-7-blur" type="matrix" values="0 0 0 0 0
                      0 0 0 0 0
                      0 0 0 0 0
                      0 0 0 0.68 0"/>
            <feOffset in="color-7-blur" result="layer-7-offsetted" dx="0" dy="64" data-target-offset-y="64"/>
            <feMerge>
                <feMergeNode in="layer-0-offsetted"/>
                <feMergeNode in="layer-1-offsetted"/>
                <feMergeNode in="layer-2-offsetted"/>
                <feMergeNode in="layer-3-offsetted"/>
                <feMergeNode in="layer-4-offsetted"/>
                <feMergeNode in="layer-5-offsetted"/>
                <feMergeNode in="layer-6-offsetted"/>
                <feMergeNode in="layer-7-offsetted"/>
                <feMergeNode in="layer-0-offsetted"/>
                <feMergeNode in="SourceGraphic"/>
            </feMerge>
        </filter>
    </defs>
</svg>
  
</body>
</html>