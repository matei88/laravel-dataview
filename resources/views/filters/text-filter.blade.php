<input type="text" class="form-control" value="{{ $value }}" name="filters[{{ $name }}]" v-model="filters['{{ $name }}']" v-on:keyup="filter()">