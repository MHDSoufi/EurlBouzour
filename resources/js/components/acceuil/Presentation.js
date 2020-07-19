import React from 'react';
import ReactDOM from 'react-dom';
import CountUp from 'react-countup';
import './presentation.css'
import { Row, Col } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

function Presentation(){
 return (
 	<div className="presente">
 	<h1>EURL BOUZOUR</h1>
 	<h3>Qui somme nous?</h3>
 	<p className="txtPara"><strong>PROMOTION IMMOBILIERE EURL BOUZOUR</strong> Créer en 1995 avec plus de 20 ans expérience dans le domaine de la construction, conçoit et réalise des projets et des ensemble immobiliers haut standing qualité et moderne pour une clientèle exigeante.
	Nous pouvons dire que La construction est un domaine qui nous connait bien ! 
	Nos promotions sont implantés dans de nombreuses wilayas</p>
	<div className="parallaxPresente">
	<div className="textePresente">
		<Row>
			<Col md={3} sm={6}>
				<h4 className="expTitle">
				<CountUp end={20} />
				<FontAwesomeIcon icon="briefcase" />
				<p className="border-title"></p>
				</h4>

				<p className="expTxt"> ans d'experiences</p>
			</Col>
			<Col md={3} sm={6}>
				<h4>
				<CountUp end={4000} />
				<FontAwesomeIcon icon="key" />
				<p className="border-title"></p>
				</h4>

				<p className="logTxt"> Logement remis</p>
			</Col>
			<Col md={3} sm={6}>
				<h4>
				<CountUp end={400} />
				<FontAwesomeIcon icon="user" />
				<p className="border-title"></p>
				</h4>

				<p className="empTxt"> Emplois creés</p>
			</Col>
			<Col md={3} sm={6}>
				<h4 className="proTitle">
				<CountUp end={15} />
				<FontAwesomeIcon icon="building" />
				<p className="border-title"></p>
				</h4>

				<p> Projets livrés</p>
			</Col>
		</Row>
	</div>
	</div>
 	</div>
 );
 
}

export default Presentation;