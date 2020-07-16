import React from 'react';
import ReactDOM from 'react-dom';
import './SliderCard.scss';
import { Card, Button, Carousel, Row, Col, Container } from 'react-bootstrap';
let propriete =[ {
    "id" : 0,
    "titre" : "Residence HEY BENSOUNA",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo1.jpg"
},
{
    "id" : 1,
    "titre" : "PROJET 160 LOGTS LPA BOUDJLIDA TLEMCEN",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo2.png"
},
{
    "id" : 2,
    "titre" : "Promotion Immobiliere Oran - Canastel",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo3.jpg"
},
{
    "id" : 3,
    "titre" : "RESIDENCE  ELYASMINE BELGAID ORAN",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo4.jpg"
},
{
    "id" : 4,
    "titre" : "RESIDENCE  ELYASMINE BELGAID ORAN2",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo4.jpg"
},
{
    "id" : 5,
    "titre" : "RESIDENCE  ELYASMINE BELGAID ORAN2",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo4.jpg"
},

{
    "id" : 6,
    "titre" : "RESIDENCE  ELYASMINE BELGAID ORAN2",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo4.jpg"
},

];

function CardPromo (props){
    return(
        <Card style={{ width: '18rem' }} id={`card-${props.propriete.id}`}>
                <Card.Img variant="top" src={props.propriete.img} />
                <Card.Body>
                    <Card.Title>{props.propriete.titre}</Card.Title>
                    <Card.Text>
                        {props.propriete.adr}
                    </Card.Text>
                    <Button variant="primary">Voir les détail</Button>
                </Card.Body>
        </Card>
    );
}
//function pageCarsoul()
function SlideCardMobil(props){
   // props.propriete.map(property => <CardPromo key={property.id} propriete = {property}/>)
    let i = 0;
    let carsoul = [] ;
    while(i < props.propriete.length){
        let item = [];
            if(props.mobile){
                   item.push(<CardPromo key={i} propriete={props.propriete[i]}/>) ;
                   i++;
            }else{
                    for (var j = 0; j < 3; j++) {

                if (typeof (props.propriete[i]) !== "undefined"){
                    item.push(<Col key={i} sm={8} lg={4}>
                    <CardPromo key={i} 
                    propriete={props.propriete[i]} />
                    </Col>);
                }
                
                i++;
            }
               
                
            } 
        
            
            carsoul.push(<Carousel.Item key={i}><Row>{item}</Row></Carousel.Item>)
            
            
         } 
        

          
    
     //console.table(item); 

    return(
        <Carousel indicators={false} slide={false}>
         
        {carsoul}
        
        </Carousel>
    );

}

class SliderCardCour extends React.Component {

constructor(props){
    super(props);
    this.state = {
        property : this.positionProperty(propriete),
    }
}
nextProperty() {
    const nextIndex = this.state.property.id+1;
    this.setState({
        property: propriete[nextIndex]
    })
    
}
prevProperty() {
    //console.log(this.state.property.id-1);
    const nextIndex = this.state.property.id-1;
    this.setState({
        property: propriete[nextIndex]
    })
}
positionProperty(propriete){
    if((propriete.length > 2)&&(propriete.length <= 4)){
        return propriete[1];
    }
    if (propriete.length%2 === 0) {
        return propriete[propriete.length/2];
    }else{
        return propriete[(propriete.length-1)/2];
    }
    return propriete[0];
}
    render(){
        return (
        <>        
        <h2 className="titreSlider">Projet en Cours</h2>
        <div id="pcDevice">
            <button type="button" 
                        className="Btn-flech-droite"
                        onClick = {() => this.nextProperty()}
                        disabled = {this.state.property.id === propriete.length-1}
                        >
                        <img width={30}
                             height={30}
                             src="/storage/icons/flechdroite.png"/>
                </button>
        <button type="button" 
                        className="Btn-flech-gauche"
                        onClick = {() => this.prevProperty()}
                        disabled = {this.state.property.id === 0}
                        >
                        <img width={30}
                             height={30}
                             src="/storage/icons/flechgauche.png"/>
                </button>
        <div className={`cards-slider active-slide-${this.state.property.id}`}>
          <div className="cards-slider-wrapper" 
               style={{'transform':`translateX(-${this.state.property.id*(112)}%)`}}
               >
                
                {
                    propriete.map(property => <CardPromo key={property.id} propriete = {property}/>)
                } 
          </div>
        </div>
        </div>

        <div id="mobilDevice">
                <Container>
                    <SlideCardMobil propriete={propriete} mobile={false}/>
                </Container>
        </div>
        <div id="mobilDevice700">
                <Container>
                    <SlideCardMobil propriete={propriete} mobile={true}/>
                </Container>
        </div>
        </>
        );
    }
}

export default SliderCardCour;


