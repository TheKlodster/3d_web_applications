function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__Rotate-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Rotate-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__Rotate-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Rotate-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Rotate-TIMER').setAttribute('enabled', 'false');
}

function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraSky()
{
	document.getElementById('model__Camera003').setAttribute('bind', 'true');
}

function cameraFront()
{
	document.getElementById('model__Camera002').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__Camera001').setAttribute('bind', 'true');
}