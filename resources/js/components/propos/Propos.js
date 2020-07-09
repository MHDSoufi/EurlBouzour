import React from 'react';
import ReactDOM from 'react-dom';
import Menu from '../partage/Menu';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
//import { faFacebook } from '@fortawesome/free-solid-svg-icons';
import "./propos.css";
import {Button, Container, Row, Col } from 'react-bootstrap';

function Rubrique(props){
	let button = [];
	if (props.buton) {
						button.push(<Button key={1} variant="outline-warning"><FontAwesomeIcon icon="coffee" /></Button>);
						button.push(<Button key={2} variant="outline-warning">Site</Button>);
					}
	if (props.oriantation === "gauche"){
		return(
			<Row>
				<Col sm={6}>
					<img 
						className="imgRubrique"
						src={props.url}
					/>
				</Col>
				<Col sm={6}>
					<h3>{props.titre}</h3>
					<p>{props.texte}</p>
					{button}				
				</Col>
			</Row>
		);
	}else{
		return(
			<Row>
				<Col sm={6}>
					<h3>{props.titre}</h3>
					<p>{props.texte}</p>
					{button}	
				</Col>
				<Col sm={6}>
					<img 
						className="imgRubrique"
						src={props.url}
					/>
				</Col>
			</Row>
		);		
	}
}
function Propos (){
	return (
		<Container fluid>
		  <Menu />
		  <div className="parallax">
		  	<h2 className="titrePage">Connaître l'EURL BOUZOUR</h2>
		  </div>
		  <Container>
		  	<p >PROMOTION IMMOBILIERE EURL BOUZOUR Créer en 1995 avec plus de 20 ans expérience dans le domaine de la construction, conçoit et réalise des projets et des ensemble immobiliers haut standing qualité et moderne pour une clientèle exigeante.</p>
		  	<strong>Nous pouvons dire que La construction est un domaine qui nous connait bien !</strong>
		  
		  <Rubrique oriantation="gauche" 
		  			url= "/storage/propos/image1.jpg"
		  			titre = "Notre savoir faire"
		  			texte ="L'activité principale de EURL BOUZOUR est la commercialisation de logements, des garages, des services et des locaux en vente sur plan (VSP)
							L’entreprise s’appuie sur la qualité et la maitrise de ses ouvriers pour exceller, dans chacune de ses activités, de la promotion immobilière et les activités annexes. 
							A ce jour la société a déjà réalisé plus de 4000 logements, tous livrés à 100% et dans les délais contractuels." 
					buton = {false}
		  />
		  </Container>
		  <Row className="offres">
		  	<Col sm={3}>
		  		<img 
		  			width={80}
		  			height={80}
		  			src="/storage/propos/icone1.png"
		  		/>
		  		<h6>CONSTRUCTION</h6>
		  		<p>La construction n’est pas seulement un métier chez EURL BOUZOUR, mais plutôt une passion, de l’expérience, de la compétence et du sérieux</p>
		  	</Col>
		  	<Col sm={3}>
		  		<img 
		  			width={80}
		  			height={80}
		  			src="/storage/propos/icone2.png"
		  		/>
		  		<h6>ACCOMPAGNEMENT</h6>
		  		<p>A chaque étape du processus d’achat de votre appartement, EURL BOUZOUR vous accompagne et vous assiste au travers de ses conseillers clients</p>
		  	</Col>
		  	<Col sm={3}>
		  		<img 
		  			width={80}
		  			height={80}
		  			src="/storage/propos/icone3.png"
		  		/>
		  		<h6>CÉLÉRITÉ</h6>
		  		<p>Livrer les projets dans les délais impartis, tel est le premier engagement de l’entreprise EURL BOUZOUR pour l’acquisition de votre bien.</p>
		  	</Col>
		  	<Col sm={3}>
		  		<img 
		  			width={80}
		  			height={80}
		  			src="/storage/propos/icone4.png"
		  		/>
		  		<h6>EVENTAIL</h6>
		  		<p>De nombreuses années dans le domaine de l’architecture et de la réalisation ont permis à EURL BOUZOUR de proposer un éventail de produits pour ses clients.</p>
		  	</Col>
		  </Row>
		  <Container>
		  <h1>Activités annexes</h1>
		  <Rubrique oriantation="droite" 
		  			url= "/storage/propos/image2.jpg"
		  			titre = "Complexe Touristique ZOUHOUR "
		  			texte ="L’entreprise est aussi connue pour ses projets réalisés dans le domaine du tourisme :
-Le complexe touristique ZOUHOUR, un hôtels de qualité situé dans la plage la plus connu de Mostaganem « les Sablette » avec 330 lits, des salle de conférence, salle des fêtes restaurent  et piscine " 
					buton = {true}
		  />
		  <Rubrique oriantation="gauche" 
		  			url= "/storage/propos/image3.jpg"
		  			titre = "Parck d'attraction MOSTALAND "
		  			texte ="L’entreprise est aussi connue pour ses projets réalisés dans le domaine du tourisme :
-Le complexe touristique ZOUHOUR, un hôtels de qualité situé dans la plage la plus connu de Mostaganem « les Sablette » avec 330 lits, des salle de conférence, salle des fêtes restaurent  et piscine " 
				buton = {true}
		  />
		  </Container>
		</Container>
	);
}
export default Propos;


