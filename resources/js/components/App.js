import React from 'react';
import ReactDOM from 'react-dom';
import Menu from './Menu';
import { Container } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {
    return (

        <Container fluid>
        <Menu />
            <p>Mettre ici le contenue SVP</p>
            <p>Mettre ici le contenue SVP</p>

            <p>Mettre ici le contenue SVP</p>
            <p>Mettre ici le contenue SVP</p>
            <p>Mettre ici le contenue SVP</p>
            <p>Mettre ici le contenue SVP</p>
            <p>Mettre ici le contenue SVP</p>

            <p></p>

        </Container>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
