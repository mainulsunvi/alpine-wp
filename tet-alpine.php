<div class="alpine-button wrap" x-data="{ clickMsg: 'Hello World', count : 0 }" >
	<span x-text="count" class="count-text"></span>
	<h1 x-text="clickMsg"></h1>

	<div class="buttons">
		<button class="incr-btn" @click="count++">Increment</button>
		<button class="decr-btn" @click="count--">Decrement</button>
	</div>

	<button class="reset-count" @click="count = 0">Reset Counter</button>
</div>