

<div class="form-group">
                <label for="Id_Deudores">ID de Deudor</label>
                <input type="number" class="form-control" id="Id_Deudores" name="Id_Deudores" 
                value="{{isset($deudor->Id_Deudores)?$deudor->Id_Deudores:''}}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" 
                value="{{isset($deudor->Nombre)?$deudor->Nombre:''}}" required>
            </div>
            <div class="form-group">
                <label for="Monto_Deuda">Monto de Deuda</label>
                <input type="number" class="form-control" id="Monto_Deuda" name="Monto_Deuda" 
                value="{{isset($deudor->Monto_Deuda)?$deudor->Monto_Deuda:''}}" required>
            </div>
            <div class="d-flex justify-content-end"> <!-- Usa flexbox para alinear -->
                <input type="submit" class="btn btn-primary" value="{{$Modo =='crear' ? 'Agregar':'Modificar'}}">
                <a href="{{ url('/deudores') }}" class="btn btn-primary ml-2">Regresar</a>
            </div>