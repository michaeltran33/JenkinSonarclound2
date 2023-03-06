class test1
{
    private static $FOO = 2; // Unused - expected sonarcloud find it
    private $i = 8; // Unused
    private $j = 6;
    public function addOne()
    {
        return $this->j++;
        return $this->j++; // expected fail for dup n after return
    }
}
