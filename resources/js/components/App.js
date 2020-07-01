import React from 'react';
import ReactDOM from 'react-dom';
import Menu from './Menu';

function App() {
    return (

        <div className="container">
        <Menu />
            <p>Mettre ici le contenue SVP</p>

        </div>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
