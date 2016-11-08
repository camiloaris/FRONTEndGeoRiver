var format_Departamentos = new ol.format.GeoJSON();
var features_Departamentos = format_Departamentos.readFeatures(geojson_Departamentos, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Departamentos = new ol.source.Vector();
jsonSource_Departamentos.addFeatures(features_Departamentos);var lyr_Departamentos = new ol.layer.Vector({
                source:jsonSource_Departamentos, 
                style: style_Departamentos,
                title: "Departamentos"
            });var format_Mapa_paises_mundo = new ol.format.GeoJSON();
var features_Mapa_paises_mundo = format_Mapa_paises_mundo.readFeatures(geojson_Mapa_paises_mundo, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Mapa_paises_mundo = new ol.source.Vector();
jsonSource_Mapa_paises_mundo.addFeatures(features_Mapa_paises_mundo);var lyr_Mapa_paises_mundo = new ol.layer.Vector({
                source:jsonSource_Mapa_paises_mundo, 
                style: style_Mapa_paises_mundo,
                title: "Mapa_paises_mundo"
            });var format_mpio = new ol.format.GeoJSON();
var features_mpio = format_mpio.readFeatures(geojson_mpio, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_mpio = new ol.source.Vector();
jsonSource_mpio.addFeatures(features_mpio);var lyr_mpio = new ol.layer.Vector({
                source:jsonSource_mpio, 
                style: style_mpio,
                title: "mpio"
            });

lyr_Departamentos.setVisible(true);lyr_Mapa_paises_mundo.setVisible(true);lyr_mpio.setVisible(true);
var layersList = [lyr_Departamentos,lyr_Mapa_paises_mundo,lyr_mpio];
lyr_Departamentos.set('fieldAliases', {'Codigo': 'Codigo', 'Departamen': 'Departamen', 'Viviendas_': 'Viviendas_', 'total_vivi': 'total_vivi', });
lyr_Mapa_paises_mundo.set('fieldAliases', {'CNTR_ID': 'CNTR_ID', 'COUNTRY': 'COUNTRY', 'PAIS': 'PAIS', 'SHAPE_LENG': 'SHAPE_LENG', 'SHAPE_AREA': 'SHAPE_AREA', });
lyr_mpio.set('fieldAliases', {'AREA': 'AREA', 'PERIMETER': 'PERIMETER', 'WCOLGEN02_': 'WCOLGEN02_', 'WCOLGEN021': 'WCOLGEN021', 'DPTO': 'DPTO', 'NOMBRE_DPT': 'NOMBRE_DPT', 'MPIO': 'MPIO', 'NOMBRE_MPI': 'NOMBRE_MPI', 'NOMBRE_CAB': 'NOMBRE_CAB', 'CLASEMUN': 'CLASEMUN', 'MPIOS': 'MPIOS', 'ZONA': 'ZONA', 'OF_REG': 'OF_REG', 'REG_ZONAS': 'REG_ZONAS', 'HECTARES': 'HECTARES', });
lyr_Departamentos.set('fieldImages', {'Codigo': 'TextEdit', 'Departamen': 'TextEdit', 'Viviendas_': 'TextEdit', 'total_vivi': 'TextEdit', });
lyr_Mapa_paises_mundo.set('fieldImages', {'CNTR_ID': 'TextEdit', 'COUNTRY': 'TextEdit', 'PAIS': 'TextEdit', 'SHAPE_LENG': 'TextEdit', 'SHAPE_AREA': 'TextEdit', });
lyr_mpio.set('fieldImages', {'AREA': 'TextEdit', 'PERIMETER': 'TextEdit', 'WCOLGEN02_': 'TextEdit', 'WCOLGEN021': 'TextEdit', 'DPTO': 'TextEdit', 'NOMBRE_DPT': 'TextEdit', 'MPIO': 'TextEdit', 'NOMBRE_MPI': 'TextEdit', 'NOMBRE_CAB': 'TextEdit', 'CLASEMUN': 'TextEdit', 'MPIOS': 'TextEdit', 'ZONA': 'TextEdit', 'OF_REG': 'TextEdit', 'REG_ZONAS': 'TextEdit', 'HECTARES': 'TextEdit', });
lyr_Departamentos.set('fieldLabels', {'Codigo': 'inline label', 'Departamen': 'inline label', 'Viviendas_': 'inline label', 'total_vivi': 'inline label', });
lyr_Mapa_paises_mundo.set('fieldLabels', {'CNTR_ID': 'inline label', 'COUNTRY': 'inline label', 'PAIS': 'inline label', 'SHAPE_LENG': 'inline label', 'SHAPE_AREA': 'inline label', });
lyr_mpio.set('fieldLabels', {'AREA': 'inline label', 'PERIMETER': 'inline label', 'WCOLGEN02_': 'inline label', 'WCOLGEN021': 'inline label', 'DPTO': 'inline label', 'NOMBRE_DPT': 'inline label', 'MPIO': 'inline label', 'NOMBRE_MPI': 'inline label', 'NOMBRE_CAB': 'inline label', 'CLASEMUN': 'inline label', 'MPIOS': 'header label', 'ZONA': 'inline label', 'OF_REG': 'inline label', 'REG_ZONAS': 'inline label', 'HECTARES': 'inline label', });
