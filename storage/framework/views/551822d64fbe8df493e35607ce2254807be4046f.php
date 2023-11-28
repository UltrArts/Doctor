

<?php $__env->startSection('titulo', 'Médicos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <form method="GET" action="<?php echo e(url('/doctors')); ?>" accept-charset="UTF-8" class="col-lg-6 mx-auto mb-3" role="search">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Pesquisar" value="<?php echo e(request('search')); ?>">
            <span class="input-group-append">
                <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </span>
         </div>
    </form>
    <h1>Médicos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Especialidade</th>
                <th scope="col">Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a scope="row" href="<?php echo e(route('doctors.show', $doctor)); ?>"><?php echo e($doctor->nome); ?></a></td>
                    <td><?php echo e($doctor->especialidade); ?></td>
                    <td><?php echo e($doctor->doctorsEvaluations()->avg('nota')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Edson_UltraDev\Desktop\es\TCC_IFSul_2022-main\resources\views/doctors/index.blade.php ENDPATH**/ ?>