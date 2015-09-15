
<div class="row">

    <div class="small-6 columns">
        {{ csrf_field() }}
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <label for="street" class="right inline">Street:</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="street" id="street" placeholder="" value="{{ old('street') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                    <label for="city" class="right inline">City:</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="city" id="city" placeholder="" value="{{ old('city') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                    <label for="zip" class="right inline">Zip/Postal Code:</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" name="zip" id="zip" placeholder="" value="{{ old('zip') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                    <label for="country" class="right inline">Country:</label>
                </div>
                <div class="small-9 columns">
                    <select class="crs-country" name="country" id="country" data-region-id="country-state" data-default-value="US" data-value="2-char">
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="small-3 columns">
                    <label for="state" class="right inline">State:</label>
                </div>
                <div class="small-9 columns">
                    <select name="state" id="country-state">
                        <option value="{{ old('state') }}">{{ old('state') }}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="small-6 columns">
        <div class="row">
            <div class="small-3 columns">
                <label for="price" class="right inline">Sale Price:</label>
            </div>
            <div class="small-9 columns">
                <input type="number" name="price" id="price" placeholder="" value="{{ old('price') }}" required>
            </div>
        </div>

        <div class="row">
            <div class="small-3 columns">
                <label for="description" class="right inline">Description:</label>
            </div>
            <div class="small-9 columns">
                <textarea name="description" id="description" rows="10" placeholder=""  required>{{ old('description') }}</textarea>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="small-12 columns">
            <button type="submit" class="button round">Create Flyer</button>
        </div>
    </div>
</div>