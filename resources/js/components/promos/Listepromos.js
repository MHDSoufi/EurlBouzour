import React from 'react';
import './listePromos.css';
import {Container, Navbar, Nav, Col, Row, Button } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

function Menu(){
	return(
		<Navbar  expand="sm" fixed = "top">
  			<Navbar.Brand href="/"><img
    									width={120}
    									height={54}
    									className="mr-3"
    									src="/storage/logo.png"
    									 />
    		</Navbar.Brand>
    		<Nav className="choix" >
			      <Button className="btn_choix "><FontAwesomeIcon icon="building" className="building1"/><FontAwesomeIcon icon="globe" className="globe1"/></Button>
			      <Button className="btn_choix choisi"><FontAwesomeIcon icon="globe" /></Button>
			      <Button className="btn_choix"><FontAwesomeIcon icon="building" /></Button> 
    		</Nav>
    		<Nav className="retour">
    			<Button className="btn_retour"><FontAwesomeIcon icon="home" /> Retour à la page d'acceuil</Button>
    		</Nav>
    	</Navbar>
	);
}
class listePromos extends React.Component {

render(){
	return (
		<div>
		<Menu />
		</div>
	);
}

}

export default listePromos;
