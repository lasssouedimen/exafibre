<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenu in ExaFibre</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body style="margin-left: 50px ; margin-right:50px">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    @if (Route::has('register'))
                        <a href="{{ route('clientdemandes.index') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">@lang('Demande service')</a>
                    @endif
                @endauth
            </div>
        @endif
   <img src="{{ asset('images') }}/{{ $information->logo }}" alt="Charles Hall"
     style="float:right ; margin-top:250px ;" />        
        <div>
            <p style="margin-top:250px ; color:#005eff; font-size: 1.2rem;text-align: center">MRT ENERGIE, société par
                actions simplifiée, immatriculée sous le SIREN 844079236, est en activité depuis 5 ans. Établie à
                GARGES-LES-GONESSE (95140), elle est spécialisée dans le secteur d'activité des télécommunications
                filaires. Son effectif est compris entre 10 et 19 salariés. Sur l'année 2022 elle réalise un chiffre
                d'affaires de 6 608 700,00 €.
            </p>
        </div>
        <div>
            <a href="{{ route('login') }}" class="btn btn-light px-5 "
                style="  width: 20%;
            background-color: rgb(64, 33, 235);
            color: rgb(243, 243, 245);
           ">@lang('Log in')</a>

        </div>
        <div>
            <a href="{{ route('clientdemandes.index') }}" class="btn btn-light px-5 "
                style="  width: 20%;
    background-color:rgb(57, 177, 97);
    color: rgb(243, 243, 245);
   ">@lang('Demande service')</a>
        </div>
    </div>
</body>

</html>
<style>
    .bloc-bottom,
    .bloc-top {
        position: relative;
        color: var(--color-white);
        background-color: var(--color-bleu);
        padding: 32px 0;
    }

    .bloc-top .logo-soc {
        bottom: -30px;
        min-width: 188px;
        width: 188px;
        height: 188px;
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.07);
    }

    .justify-content-center {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .align-items-center {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .d-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
</style>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>



<html>
    <div id="app">
    </div>
</html>
<style>
    html {
  font-size: 18px;
  
  @media (min-width: 900px) {
    font-size: 24px;
  }
}

body {
  font-family: 'Montserrat', sans-serif;
  font-weight: 300;
  line-height: 1.45;
  color: #0F1108;
}

h1 {
  font-size: 2.2rem;
  margin: 0;
  font-weight: 600;
  line-height: 1.15;
  
  @media (min-width: 900px) {
    font-size: 2.488rem;
  }
}

h2 {
  font-size: 1.4rem;
  margin: 0.5rem 0;
  line-height: 1.15;
  font-weight: 200;
  
  @media (min-width: 900px) {
    margin: 1rem 0;
    font-size: 1.44rem;
  }
}

p {
  margin-top: 0.25rem;
  
  @media (min-width: 900px) {
    margin-top: 0.5rem;
  }
}

a {
  color: #0F1108;
  text-decoration: none;
  border-bottom: currentcolor 1px solid;
}

// General modules
.container {
  max-width: 520px;
  margin: 0 auto;
  padding: 0 1rem 100px 1rem;
  
  @media (min-width: 900px) {
    max-width: 650px;
    padding: 0 1rem 90px 1rem;
  }
}

// Full-screen wrapper
.app {
  position: relative;
  background: #3353ff;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: calc(100vh - 2rem);
  margin: 1rem;
  overflow: hidden;
  
  // Modifiers
  &--debug {
    .grab-zone {
      background: rgba(0, 0, 0, 0.15);
    }
    .grab-zone__debug {
      display: block;
    }
    .grab-zone__danger {
      background: rgba(0, 0, 0, 0.15);
    }
    .grabber__arm-wrapper {
      background: rgba(0, 0, 0, 0.15);
    }
  }
}

.grab-zone-wrapper {
  position: absolute;
  bottom: 0;
  right: 0;
  transform: translateX(30%) translateY(50%);
}

.grab-zone {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 700px;
  height: 700px;
  border-radius: 50%;
  
  &__danger {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 400px;
    height: 400px;
    border-radius: 50%;
  }
  
  &__debug {
    display: none;
    position: absolute;
    width: 300px;
    top: -100px;
    font-size: 14px;
    text-align: center;
    text-transform: uppercase;
  }
}

.grabber {
  position: relative;
  width: 100px;
  height: 100px;
  
  &__arm-wrapper {
    position: absolute;
    top: -80px;
    width: 24px;
    height: 260px;
  }

  &__arm {
    position: relative;
    width: 24px;
    height: 200px;
    background: #7D9A9E;
    border-radius: 20px;
    overflow: visible;
    transform: translateY(100%);
    transition: transform 0.2s ease;
  }

  &__hand {
    display: block;
    position: absolute;
    top: -12px;
    transform: scale(1.4) rotate(-10deg) translateY(100%);
    transform-origin: bottom center;
    transition: transform 0.3s ease;
  }
  
  &__face {
    position: absolute;
    width: 75px;
    height: 84px;
    right: 5%;
    transition: transform 0.3s ease;
  }
  
  
  &__body {
    position: absolute;
    top: 50%;
    left: 0%;
    width: 110px;
    height: 95px;
    border-radius: 50%;
    background: #7D9A9E;
    transition: transform 0.3s ease;
  }
  
    
  // Modifiers
  &--waiting {
    .grabber__hand {
      transform: scale(1.4) rotate(-10deg);
    }
    .grabber__arm {
      transform: translateY(80%);
    }
    .grabber__face {
      transform: translateY(60%);
    }
  }
  
  // Modifiers
  &--stalking {
    .grabber__hand {
      transform: scale(1.4) rotate(-10deg);
    }
    .grabber__arm {
      transform: translateY(70%);
    }
    .grabber__face {
      transform: translateY(10%);
    }
  }

  &--grabbing {
    .grabber__face {
      transform: translateY(-40%) rotate(10deg);
    }
    .grabber__arm {
      transform: translateY(0%);
    }
    .grabber__body {
      transform: translateY(-20%);
    }
    .grabber__hand {
      transform: scale(1.7) rotate(10deg);
    }
  }
  
  &--grabbed {
    .grabber__arm {
      transition: transform 1s ease;
    }
    .grabber__hand {
      transition: transform 2.5s ease;
    }
    .grabber__face {
      transform: translateY(70%);
      transition: transform 1s ease;
    }
    .grabber__body {
      transform: translateY(50%);
      transition: transform 1s ease;
    }
  }
  
  &--extended {
    .grabber__arm {
      transform: translateY(-20%);
    }
    .grabber__face {
      transform: translateY(-60%) rotate(15deg);
    }
    .grabber__body {
      transform: translateY(-40%);
    }
  }
  
  &--shaka {
    .grabber__arm {
      transform: translateY(50%);           
    }
    .grabber__hand {
      transform: scale(2.5) translateY(10%);
      animation: shaka 0.5s infinite alternate forwards;
      transform-origin: 55% 60%;
    }
    .grabber__face {
      transform: translateY(70%);
      transition: transform 1s ease;
    }
    .grabber__body {
      transform: translateY(50%);
      transition: transform 1s ease;
    }
  }
}

.trap-button {
  position: absolute;
  bottom: 80px;
  right: 70px;
  min-width: 125px;
  background: #8ECACC;
  color: white;
  border-radius: 5px;
  padding: 0.4rem 0.5rem;
  font-weight: 600;
  font-size: 18px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.debug-button {
  position: fixed;
  top: 0;
  right: 0;
  background: transparent;
  padding: 1rem;
  margin: 1rem;
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 1px;
  opacity: 0.5;
}

@keyframes shaka {
  0% { transform: scale(2.5) translateY(0%) rotate(-20deg); }
  100% { transform: scale(2.5) translateY(0%) rotate(20deg); }
}
    </style>
 <script>
    const { useState, useRef, useEffect, useLayoutEffect, createContext } = React;

/**
 * Globals
 */

const CONSTANTS = {
  assetPath: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/184729",
}

const ASSETS = {
  head: `${CONSTANTS.assetPath}/head.svg`,
  waiting: `${CONSTANTS.assetPath}/hand.svg`,
  stalking: `${CONSTANTS.assetPath}/hand-waiting.svg`,
  grabbing: `${CONSTANTS.assetPath}/hand.svg`,
  grabbed: `${CONSTANTS.assetPath}/hand-with-cursor.svg`,
  shaka: `${CONSTANTS.assetPath}/hand-surfs-up.svg`
}

// Preload images
Object.keys(ASSETS).forEach(key => {
  const img = new Image();
  img.src = ASSETS[key];
});


/**
 * Shared hooks
 */

// Hover state - https://dev.to/spaciecat/hover-states-with-react-hooks-4023
const useHover = () => {
  const ref = useRef();
  const [hovered, setHovered] = useState(false);

  const enter = () => setHovered(true);
  const leave = () => setHovered(false);

  useEffect(
    () => {
      ref.current.addEventListener("mouseenter", enter);
      ref.current.addEventListener("mouseleave", leave);
      return () => {
        ref.current.removeEventListener("mouseenter", enter);
        ref.current.removeEventListener("mouseleave", leave);
      };
    },
    [ref]
  );

  return [ref, hovered];
};

// Mouse position
const useMousePosition = () => {
  const [position, setPosition] = useState({ x: 0, y: 0 });

  useEffect(() => {
    const setFromEvent = e => setPosition({ x: e.clientX, y: e.clientY });
    window.addEventListener("mousemove", setFromEvent);

    return () => {
      window.removeEventListener("mousemove", setFromEvent);
    };
  }, []);

  return position;
};

// Element position
const usePosition = () => {
  const ref = useRef();
  const [position, setPosition] = useState({});

  const handleResize = () => {
    setPosition(ref.current.getBoundingClientRect());
  };

  useLayoutEffect(() => {
    handleResize();
    window.addEventListener('resize', handleResize);

    return () => {
      window.removeEventListener('resize', handleResize);
    };
  }, [ref.current]);

  return [ref, position];
};


/**
 * React Components
 */

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      debug: false,
      cursorGrabbed: false,
      gameOver: false,
    };
    
    this.handleToggleDebug = this.handleToggleDebug.bind(this);
    this.handleButtonClicked = this.handleButtonClicked.bind(this);
    this.handleCursorGrabbed = this.handleCursorGrabbed.bind(this);
  }
  
  handleToggleDebug() {
    this.setState({
      debug: !this.state.debug
    });
  }
  
  handleCursorGrabbed() {
    this.setState({
      cursorGrabbed: true
    });
    setTimeout(() => {
      this.setState({
        cursorGrabbed: false
      });
    }, 2000)
  }

    
  handleButtonClicked() {
    this.setState({
      gameOver: true
    });
    setTimeout(() => {
      this.setState({
        gameOver: false
      });
    }, 4000)
  }

  render() {
    const { cursorGrabbed, gameOver, debug } = this.state;
    const screenStyle = cursorGrabbed ? { cursor: "none" } : {};
    const appClass = debug ? "app app--debug" : "app";
    
    return (
      <div className={appClass} style={screenStyle}>
        <section className="container">
          <h1>MRT Energy</h1>
          <h2>Bienvenue dans le Monde de la Fibre.</h2>
          <p>MRT ENERGIE, société par
                actions simplifiée, est en activité depuis 5 ans. Établie à
                GARGES-LES-GONESSE (95140), elle est spécialisée dans le secteur d'activité des télécommunications.
               </p>
          <button
            className="debug-button"
            onClick={this.handleToggleDebug}>
              Debug
          </button>
        </section>
        
        <button
          className="trap-button"
          onClick={this.handleButtonClicked}>
            { gameOver && "Nice one" }
            { cursorGrabbed && "Gotcha!" }
            { !gameOver && !cursorGrabbed && "Button!"}
        </button>
        
        <div className="grab-zone-wrapper">
          <GrabZone
            onCursorGrabbed={this.handleCursorGrabbed} 
            cursorGrabbed={cursorGrabbed}
            gameOver={gameOver}
          />
        </div>
      </div>
    );
  }
}

// GrabZone (The hover trigger zone)
const GrabZone = ({ cursorGrabbed, gameOver, onCursorGrabbed }) => {
  const [outerRef, outerHovered] = useHover();
  const [innerRef, innerHovered] = useHover();
  const [isExtended, setExtendedArm] = useState(false);

  let state = "waiting";
  if (outerHovered) {
    state = "stalking";
  }
  if (innerHovered) {
    state = "grabbing";
  }
  if (cursorGrabbed) {
    state = "grabbed";
  }
  if (gameOver) {
    state = "shaka"
  }
  
  // If state is grabbing for a long time, they're being clever!
  useEffect(() => {
      let timer;
      if (state === "grabbing") {
        timer = setTimeout(() => {
          // Not so clever now, are they?
          setExtendedArm(true);
          timer = null;
        }, 2000);
      }
      return () => {
        setExtendedArm(false);
        if (timer) {
          clearTimeout(timer);
        }
      };
    },
    [state]
  );

  return (
    <div className="grab-zone" ref={outerRef}>
      <div className="grab-zone__debug">
        <strong>Debug info:</strong>
        <p>Current state: {state}</p>
        <p>Extended arm: {isExtended ? "Yes" : "No"}</p>
      </div>
      <div className="grab-zone__danger" ref={innerRef}>
        <Grabber
          state={state}
          gameOver={gameOver}
          extended={isExtended}
          onCursorGrabbed={onCursorGrabbed}
        />
      </div>
    </div>
  );
};

// Grabber (The graphic)
const Grabber = ({ state, gameOver, extended, onCursorGrabbed }) => {
  const mousePos = useMousePosition();
  const [ref, position] = usePosition();
  const hasCursor = false;

  // Calculate rotation of armWrapper
  const x = position.left + position.width * 0.5;
  const y = position.top + position.height * 0.5;
  const angle = gameOver ? 0 : Math.atan2(mousePos.x - x, -(mousePos.y - y)) * (180 / Math.PI);
  
  // Ensure value is within acceptable range (-75 to 75)
  const rotation = Math.min(Math.max(parseInt(angle), -79), 79);
  
  const grabberClass = `grabber grabber--${state} ${extended && "grabber--extended"}`;
  const wrapperStyle = { transform: `rotate(${rotation}deg)` };

  let handImageSrc = ASSETS[state];

  return (
    <div className={grabberClass}>
      <div className="grabber__body"></div>
      <img className="grabber__face" src={ASSETS.head} />
      <div className="grabber__arm-wrapper" ref={ref} style={wrapperStyle}>
        <div className="grabber__arm">
          <img
            className="grabber__hand"
            src={handImageSrc}
            onMouseEnter={onCursorGrabbed}
          />
        </div>
      </div>
    </div>
  );
};

// Render app
ReactDOM.render(<App />, document.getElementById("app"));

    </script>