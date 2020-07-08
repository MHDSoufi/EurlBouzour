import React from 'react';
import ReactDOM from 'react-dom';
import { Container } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import { BrowserRouter as Router, Route } from "react-router-dom";
import Acceuil from './acceuil/Acceuil';
import Propos from './propos/Propos';

function App() {
    return (

        <Router>
          <Route path="/" exact component={Acceuil} />
          <Route path="/propos" exact component={Propos} />
      </Router>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
