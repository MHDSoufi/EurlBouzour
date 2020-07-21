import React from 'react';
import ReactDOM from 'react-dom';
import { Container } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import { BrowserRouter as Router, Route } from "react-router-dom";
import Acceuil from './acceuil/Acceuil';
import Propos from './propos/Propos';
import Faq from './faq/Faq';
import Contact from './contact/Contact';
import Listepromos from './promos/Listepromos';

function App() {
    return (

        <Router>
          <Route path="/" exact component={Acceuil} />
          <Route path="/propos" exact component={Propos} />
          <Route path="/faq" exact component={Faq} />
          <Route path="/contact" exact component={Contact} />
          <Route path="/promo_en_cour" exact component={Listepromos} />
      </Router>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
