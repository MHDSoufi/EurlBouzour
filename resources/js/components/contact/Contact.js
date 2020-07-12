import React from 'react';
import Menu from '../partage/Menu';
import './contact.css';
import {Tabs, Container, Tab, Col } from 'react-bootstrap';



function Contact(){
	var mymap = L.map('mapid').setView([51.505, -0.09], 13);
	return(
		<div>
			<Menu isFixed={false} />
			<div className="parallaxContact">
				<h2 className="titreContact">Contact</h2>
		    </div>
		    <Container>
		    	<Tabs defaultActiveKey="mosta" id="uncontrolled-tab-example">
  					<Tab eventKey="mosta" title="Mostaghanem">
    					<Col sm={6}>

    					</Col>
    					<Col sm={6}>
    						<div id="mapid"></div>
    						{

    							L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
							    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
							    maxZoom: 18,
							    id: 'mapbox/streets-v11',
							    tileSize: 512,
							    zoomOffset: -1,
							    accessToken: 'your.mapbox.access.token'
								}).addTo(mymap)
    						}
    					</Col>
  					</Tab>
  					<Tab eventKey="oran" title="Oran">
   						<p>Oran</p>
 					</Tab>
  					<Tab eventKey="tel" title="Tlemcen" >
    					<p>Tlemcen</p>
  					</Tab>
  					<Tab eventKey="chlef" title="Chlef" >
    					<p>Chlef</p>
  					</Tab>
				</Tabs>
		    </Container>
		</div>
	);
}

export default Contact ;