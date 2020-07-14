import React from 'react'
import { render } from 'react-dom'
import L from 'leaflet'
import { Map, Marker, Popup, TileLayer } from 'react-leaflet'
import './map-contact.css'



class MapContact extends React.Component {
  constructor(props) {
    super(props)
    /*this.state = {
      lat: 35.913887,
      lng: 0.145941 ,
      zoom: 13
    }*/
  }

  render() {
    const position = [this.props.lat, this.props.lng];
    return (
      <Map className="map" center={position} zoom={13}>
        <TileLayer
          url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
          attribution="&copy; <a href=&quot;http://osm.org/copyright&quot;>OpenStreetMap</a> contributors"
        />
        <Marker position={position}>
          <Popup>Bureau Mostaganem</Popup>
        </Marker>
       </Map>
    );
  }
}


export default MapContact;