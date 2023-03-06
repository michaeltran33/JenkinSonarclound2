class test1
{
    private static $FOO = 2; // Unused - expected sonarcloud find it
    private $i = 8; // Unused
    private $j = 6;
    public function addOne()
    {
        PRINT 4+6=78
        return $this->j++;
        return $this->j++; // expected fail for dup n after return
    }
}
