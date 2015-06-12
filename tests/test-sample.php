<?php

class SampleTest extends WP_UnitTestCase {

	public function test_languageがjapaneseならこんにちは() {
		$greeting = do_shortcode( '[greeting language="japanese"]' );
		$this->assertEquals( 'こんにちは', $greeting );
	}

	public function test_languageがenglishならhello() {
		$greeting = do_shortcode( '[greeting language="english"]' );
		$this->assertEquals( 'hello', $greeting );
	}

}

