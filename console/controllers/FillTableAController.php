<?

namespace console\controllers;

use yii;
use yii\console\Controller;
use yii\helpers\Console;
use yii\base\Security;

class FillTableAController extends Controller
{
    //Records count to generate
    private $records_count = 1000;

    /**
     * Run command: yii fill-table-a
     * @return int
     * @throws yii\base\Exception
     * @throws yii\db\Exception
     */
    public function actionIndex()
    {
        $security = new Security();

        Console::startProgress(0,$this->records_count);
        for( $i=0;$i<$this->records_count;$i++ ) {
            Yii::$app->db->createCommand()->insert('table_a',['value'=>$security->generateRandomString(8)])->execute();
            Console::updateProgress($i,$this->records_count);
        }
        Console::endProgress('done'.PHP_EOL);

        return 0;
    }
}