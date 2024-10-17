<div class="form-group">
                <label for="Id">ID de Deudor</label>
                <input type="number" class="form-control" id="Id" name="Id" 
                value="{{isset($pago->Id)?$pago->Id:''}}" required>
            </div>
            <div class="form-group">
                <label for="Fecha_Pago">Fecha Pago</label>
                <input type="date" class="form-control" id="Fecha_Pago" name="Fecha_Pago" 
                value="{{isset($pago->Fecha_Pago)?$pago->Fecha_Pago:''}}" required>
            </div>
            <div class="form-group">
                <label for="Cantidad_Pago">Cantidad Pago</label>
                <input type="number" class="form-control" id="Cantidad_Pago" name="Cantidad_Pago" 
                value="{{isset($pago->Cantidad_Pago)?$pago->Cantidad_Pago:''}}" required>
            </div>
            <div class="d-flex justify-content-end"> <!-- Usa flexbox para alinear -->
                <input type="submit" class="btn btn-primary" value="{{$Modo =='crear' ? 'Agregar':'Modificar'}}">
                <a href="{{ url('/pagos/') }}" class="btn btn-primary ml-2">Regresar</a>
            </div>
